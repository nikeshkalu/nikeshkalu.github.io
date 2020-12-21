<?php
/**
 * Custom Customizer Controls.
 *
 * @package Career_Portfolio
 */

if ( ! class_exists( 'WP_Customize_Control' ) ) {

	return null;

}

/**

 * Class Career_Portfolio_Dropdown_Taxonomies_Control

 */

class Career_Portfolio_Dropdown_Taxonomies_Control extends WP_Customize_Control {



    /**

     * Render the control's content.

     *

     * @since 3.4.0

     */

    public function render_content() {

        $dropdown = wp_dropdown_categories(

            array(

                'name'              => 'career-portfolio-dropdown-categories-' . $this->id,

                'echo'              => 0,

                'show_option_none'  => __( '&mdash; Select &mdash;', 'career-portfolio' ),

                'option_none_value' => '0',

                'selected'          => $this->value(),

                'hide_empty'        => 0,                   



            )

        ); 

        

        $dropdown = str_replace( '<select', '<select ' . $this->get_link(), $dropdown );



        printf(

            '<label class="customize-control-select"><span class="customize-control-title">%s</span> %s <span class="description customize-control-description"></span>%s </label>',

            esc_html($this->label),

            esc_html($this->description),

            $dropdown



        );

    }



}

/*

* Class Career_Portfolio_Customize_Icons_Control

*

*/

class Career_Portfolio_Customize_Icons_Control extends WP_Customize_Control {



    public $type = 'career_portfolio_icons';



    public function render_content() {



          $saved_icon_value = $this->value();

         ?>

        <label>

            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

            <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>

            <div class="fa-icons-list">

                <div class="selected-icon-preview"><?php if( !empty( $saved_icon_value ) ) { echo '<i class="fa '. esc_attr($saved_icon_value) .'"></i>'; } ?></div>

                    <ul class="icons-list-wrapper">

                        <?php 

                        $career_portfolio_icons_list = career_portfolio_all_icons_array();

                        foreach ( $career_portfolio_icons_list as $key => $icon_value ) {

                            if( $saved_icon_value == $icon_value ) {

                                echo '<li class="selected"><i class="fa '. esc_attr($icon_value) .'"></i></li>';

                            } else {

                                echo '<li><i class="fa '. esc_attr($icon_value) .'"></i></li>';

                            }

                        }

                        ?>

                    </ul>

                <input type="hidden" class="ap-icon-value" value="" <?php $this->link(); ?>>

            </div>



        </label>

    <?php   }

}



/**

 * Customize Control for Taxonomy Select.

 *

 * @since 1.0.0

 */

class Career_Portfolio_Multiple_Dropdown_Taxonomies_Control extends WP_Customize_Control {



    /**

     * Type of control.

     *

     * @var string

     */

    public $type = 'dropdown-taxonomies';



    /**

     * Taxonomy to list.

     *

     * @var string

     */

    public $taxonomy = '';



    /**

     * Check if multiple.

     *

     * @var bool

     */

    public $multiple = false;



    /**

     * Constructor.

     *

     * @param WP_Customize_Manager $manager Customizer bootstrap instance.

     * @param string               $id      Control ID.

     * @param array                $args    Optional. Arguments to override class property defaults.

     */

    public function __construct( $manager, $id, $args = array() ) {



        $taxonomy = 'category';

        if ( isset( $args['taxonomy'] ) ) {

            $taxonomy_exist = taxonomy_exists( esc_attr( $args['taxonomy'] ) );

            if ( true === $taxonomy_exist ) {

                $taxonomy = esc_attr( $args['taxonomy'] );

            }

        }

        $args['taxonomy'] = $taxonomy;

        $this->taxonomy = esc_attr( $taxonomy );



        if ( isset( $args['multiple'] ) ) {

            $this->multiple = ( true === $args['multiple'] ) ? true : false;

        }



        parent::__construct( $manager, $id, $args );

    }



    /**

     * Render content.

     */

    public function render_content() {



        $tax_args = array(

            'hierarchical' => 0,

            'taxonomy'     => $this->taxonomy,

        );

        $all_taxonomies = get_categories( $tax_args );

        $multiple_text = ( true === $this->multiple ) ? 'multiple' : '';

        $value = $this->value();

        ?>

        <label>

            <span class="customize-control-title"><?php echo esc_html( $this->label ); ?></span>

            <?php if ( ! empty( $this->description ) ) : ?>

                <span class="description customize-control-description"><?php echo esc_html( $this->description ); ?></span>

            <?php endif; ?>

            <select <?php $this->link(); ?> <?php echo esc_attr( $multiple_text ); ?>>

                <?php

                printf( '<option value="%s" %s>%s</option>', '', selected( $value, '', false ), esc_attr( '&mdash; All &mdash;', 'career-portfolio' ) );

                ?>

                <?php if ( ! empty( $all_taxonomies ) ) : ?>

                    <?php foreach ( $all_taxonomies as $key => $tax ) : ?>

                        <?php

                        printf( '<option value="%s" %s>%s</option>', esc_attr( $tax->term_id ), selected( $value, $tax->term_id, false ), esc_html( $tax->name ) );

                        ?>

                    <?php endforeach; ?>

                <?php endif; ?>

            </select>

        </label>

        <?php

    }

}

