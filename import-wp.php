<?php

/**

*/

function import( $args ) {
    //
    $out = array();
    extract( $args );

    foreach( $authors as $author ) {
        //
    }

    foreach( $attachments as $attachment ) {
        //
    }

    foreach( $posts as $post ) {
        /**
        Author exist ?
        * is an existing email, ID, or admin...

        */

        /**
        Insert post
        */
        //rebuild post array
        $postarr = array(
                 //
                 );
        $id = wp_insert_post( $postarr, true );

        if( is_wp_error( $id ) ) {
            //add error to output
            $out[] = $id;
        } else {
            //
            foreach( $imgs as $img ) {
                /**
                Already uploaded ?
                */
                if( ! is_int( $img ) ) { 
                    /**
                    Get image
                    */

                    /**
                    Insert image
                    */
                } else {
                    //get img ID
                }
                /**
                Link image
                */
            }
            foreach( $metas as $meta ) {
                //
            }
            foreach( $terms as $term ) {
                //
            }
        }
    }

}