# WebAIntelligence WordPress Theme

A modern business consulting WordPress theme with AI Intelligence styling. Converted from static HTML to a fully functional WordPress theme following best practices.

## Files Created

### Core Theme Files

- **header.php** - Theme header with navigation menu, logo support, and wp_head()
- **footer.php** - Theme footer with wp_footer() and closing tags
- **front-page.php** - Homepage template featuring the hero section
- **functions.php** - Theme setup, scripts/styles enqueue, and WordPress customizations
- **style.css** - All CSS styles with WordPress theme header

## Installation

1. Copy the theme folder to `/wp-content/themes/webanintelligence/`
2. Log in to WordPress admin
3. Go to **Appearance > Themes**
4. Activate the **WebAIntelligence** theme

## Theme Features

✅ **WordPress Best Practices**
- Proper use of `wp_head()` and `wp_footer()`
- Security functions: `esc_url()`, `esc_attr()`, `esc_html__()`, `wp_kses_post()`
- Dynamic asset paths using `get_template_directory_uri()`
- Proper text domain for translations

✅ **Customization Support**
- Custom logo support (set via Appearance > Site Identity)
- Custom menus (configure primary navigation menu)
- Widget areas ready for implementation
- Responsive design with CSS Grid and Flexbox

✅ **Menu Integration**
- Primary navigation menu with fallback
- Automatic "Contact" button styling with `.btn-nav` class
- Full WordPress menu customization in admin

✅ **Asset Management**
- Google Fonts (Poppins) - loaded via CDN in header
- All CSS integrated in style.css
- Optimized for performance
- SEO-friendly structure

## Configuration

### Setting a Custom Logo

1. Go to **Appearance > Site Identity**
2. Upload your logo under "Logo"
3. The logo will automatically appear in the header

### Creating the Navigation Menu

1. Go to **Appearance > Menus**
2. Create a new menu (e.g., "Main Menu")
3. Add menu items:
   - Home (link to homepage)
   - Services
   - About Us
   - Contact
4. Check "Display location" > "Primary Menu"
5. Save the menu

The "Contact" item will automatically get the `.btn-nav` button styling.

## Template Structure

### Hooks and Actions

The theme uses standard WordPress hooks:
- `wp_head()` - Enqueues stylesheets and metadata
- `wp_body_open()` - Browser compatibility hook
- `wp_footer()` - Enqueues scripts and footer content

### Extending the Theme

To add additional pages or custom templates:

```php
// Example: Create a page template (page-custom.php)
<?php get_header(); ?>

<div class="container">
    <h1><?php the_title(); ?></h1>
    <?php the_content(); ?></p>
</div>

<?php get_footer(); ?>
```

## Security & Performance

### Security Measures Implemented
- All URLs escaped with `esc_url()`
- All attributes escaped with `esc_attr()`
- Text properly escaped with `esc_html__()` for translations
- Post content sanitized with `wp_kses_post()`

### Performance
- Minimal HTTP requests
- Inline Google Fonts
- CSS optimized
- Ready for minification

## Customization

### Modifying the Hero Section

Edit **front-page.php** to change:
- Headline text and styling
- Call-to-action buttons
- Hero image

### Changing Colors

Edit **style.css** CSS variables:
```css
:root {
    --primary: #fb00ff;      /* Main brand color */
    --accent: #4463ca;       /* Secondary color */
    --text: #69727D;         /* Text color */
    --light-bg: #051423;     /* Background color */
    --white: #ffffff;        /* White color */
}
```

### Adding JavaScript

In **functions.php**, uncomment the custom script enqueue:
```php
wp_enqueue_script( 'webanintelligence-script', 
    get_template_directory_uri() . '/js/custom.js', 
    array( 'jquery' ), 
    wp_get_theme()->get( 'Version' ), 
    true 
);
```

## File Structure

```
webanintelligence/
├── header.php              # Theme header with navigation
├── footer.php              # Theme footer
├── front-page.php          # Homepage template
├── functions.php           # Theme functionality
├── style.css               # All theme styles
├── logos/
│   ├── Logo3d.png         # Main logo
│   └── LogoPequeño3d.png  # Hero image
└── README.md              # This file
```

## WordPress Compatibility

- **Requires:** WordPress 5.8+
- **Tested up to:** WordPress 6.4
- **PHP:** 7.4 or higher
- **Browser:** All modern browsers

## Common Tasks

### Changing the Hero Image
1. Replace `LogoPequeño3d.png` in the `/logos` folder
2. Or edit **front-page.php** and update the image path

### Adding a Footer Menu
Add to **functions.php**:
```php
register_nav_menus( array(
    'footer' => esc_html__( 'Footer Menu', 'webanintelligence' ),
) );
```

Then display in **footer.php**:
```php
<?php wp_nav_menu( array( 'theme_location' => 'footer' ) ); ?>
```

### Enabling Comments
In **functions.php**, add:
```php
add_post_type_support( 'page', 'comments' );
```

## Support & Customization

This is a starter theme. You can:
- Add custom post types
- Integrate with page builders (Elementor, Gutenberg)
- Add WooCommerce support
- Extend with custom plugins
- Modify templates as needed

## License

GPL v2 or later - See style.css for full license information

## Notes

- All design and layout from original HTML are preserved
- Theme is production-ready but can be extended further
- Use WordPress customizer for font, color, and layout adjustments
- Always backup before making changes
