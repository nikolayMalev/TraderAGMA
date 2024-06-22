document.addEventListener('DOMContentLoaded', function() {
    const menuIcon = document.querySelector( '.nav-menu-btn' ); 

    menuIcon.addEventListener( 'click', () => {
        document.querySelector( 'body' ).classList.toggle( 'has-menu' );
    });
});