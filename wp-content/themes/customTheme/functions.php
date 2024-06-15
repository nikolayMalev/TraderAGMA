<?php

function custom_theme_menu() {
    add_menu_page(
        'Development',
        'Development',
        'manage_options',
        'custom-development',
        'custom_development_page',
        'dashicons-hammer'
    );
}
add_action('admin_menu', 'custom_theme_menu');

// Callback function to render Development Page
function custom_development_page() {
    echo '<h1>Development Menu</h1>';
}

function custom_template_submenu() {
    add_submenu_page(
        'custom-development',
        'Template Management',
        'Template Management',
        'manage_options', // Corrected capability spelling
        'template-management',
        'template_management_page'
    );
}

add_action('admin_menu', 'custom_template_submenu');

function template_management_page() {
    echo '<h1>Template Management</h1>';
    ?>

    <form method="post" action=""> 
        <label for="template_name">Template Name:</label><br>
        <input type="text" id="template_name" name="template_name"><br>
        <label for="template_slug">Template Slug:</label><br>
        <input type="text" id="template_slug" name="template_slug"><br><br>
        <input type="submit" name="create_template" value="Create Template">
    </form>

    <h2>Existing Templates:</h2>
    <?php

    $template_files = get_template_files();
    foreach ($template_files as $template_file) {
        echo "<p>$template_file</p>";
    }
}

function get_template_files() {
    $template_dir = get_template_directory() . '/templates'; // Updated directory
    if (!file_exists($template_dir)) {
        return array(); // Return empty array if directory doesn't exist
    }
    $template_files = scandir($template_dir);
    return array_diff($template_files, array('.', '..'));
}

if (isset($_POST['create_template'])) {
    $template_name = sanitize_text_field($_POST['template_name']);
    $template_slug = sanitize_text_field($_POST['template_slug']);

    // Check if a file with the same slug already exists
    $template_dir = get_template_directory() . '/templates';
    $template_file_path = $template_dir . '/' . $template_slug . '.php';

    if (file_exists($template_file_path)) {
        echo '<div class="error"><p>A template with the same slug already exists. Please choose a different slug.</p></div>';
        return;
    }

    // Create the template file
    $template_content = '<?php /* Template Name: ' . $template_name . ' */ ?>';
    
    if (!file_exists($template_dir)) {
        mkdir($template_dir); // Create 'templates' directory if it doesn't exist
    }

    $template_created = file_put_contents($template_file_path, $template_content);
    if ($template_created !== false) {
        echo '<div class="updated"><p>New template created successfully!</p></div>';
        
        // Create a new page associated with the template
        $new_page_id = create_page_from_template($template_name, $template_slug);
        if ($new_page_id) {
            echo '<div class="updated"><p>New page created and associated with the template!</p></div>';
        } else {
            echo '<div class="error"><p>Error creating page!</p></div>';
        }
    } else {
        echo '<div class="error"><p>Error creating template file!</p></div>';
    }
}

function create_page_from_template($template_name, $template_slug) {
    // Create a new page
    $new_page = array(
        'post_title'    => $template_name,
        'post_content'  => '', // You can add content here if needed
        'post_status'   => 'publish',
        'post_type'     => 'page',
    );

    // Insert the page into the database
    $new_page_id = wp_insert_post($new_page);

    // Set the page template
    update_post_meta($new_page_id, '_wp_page_template', 'templates/' . $template_slug . '.php'); // Path to template file

    // Optionally, store some metadata to link the template and page
    update_post_meta($new_page_id, 'template_association', $template_slug);

    return $new_page_id;
}

function my_theme_scripts() {
    wp_enqueue_style('style', get_stylesheet_uri());
    wp_enqueue_script('script', get_template_directory_uri() . '/js/script.js', array('jquery'), '1.0', true);
}
add_action('wp_enqueue_scripts', 'my_theme_scripts');
