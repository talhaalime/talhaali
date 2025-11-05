<?php
class Custom_Nav_Walker extends Walker_Nav_Menu {

    // Start Level <ul>
    function start_lvl( &$output, $depth = 0, $args = null ) {
        $indent = str_repeat("\t", $depth);
        $class = ($depth === 0) ? 'dropdown' : 'sub-dropdown';
        $output .= "\n$indent<ul class=\"$class\">\n";
    }

    // Start Element <li>
    function start_el( &$output, $item, $depth = 0, $args = null, $id = 0 ) {
        $indent = ($depth) ? str_repeat("\t", $depth) : '';

        // Default classes
        $classes = empty( $item->classes ) ? array() : (array) $item->classes;
        $classes[] = 'menu-item-' . $item->ID;

        // Detect dropdown parent
        $has_children = in_array('menu-item-has-children', $classes);
        if ( $has_children && $depth === 0 ) {
            $classes[] = 'dropdown';
        } elseif ( $has_children && $depth > 0 ) {
            $classes[] = 'sub-dropdown';
        }

        // Combine classes
        $class_names = join( ' ', apply_filters( 'nav_menu_css_class', array_filter( $classes ), $item, $args ) );
        $class_names = $class_names ? ' class="' . esc_attr( $class_names ) . '"' : '';

        // Link attributes
        $atts = array();
        $atts['href'] = ! empty( $item->url ) ? $item->url : '';
        $atts['class'] = 'menu-link';
        $attributes = '';
        foreach ( $atts as $attr => $value ) {
            if ( ! empty( $value ) ) {
                $value = ( 'href' === $attr ) ? esc_url( $value ) : esc_attr( $value );
                $attributes .= ' ' . $attr . '="' . $value . '"';
            }
        }

        $title = apply_filters( 'the_title', $item->title, $item->ID );
        $item_output  = $args->before;
        $item_output .= '<a' . $attributes . '>' . $args->link_before . $title . $args->link_after . '</a>';
        $item_output .= $args->after;

        $output .= $indent . '<li' . $class_names . '>' . $item_output;
    }

    // End Element </li>
    function end_el( &$output, $item, $depth = 0, $args = null ) {
        $output .= "</li>\n";
    }
}
