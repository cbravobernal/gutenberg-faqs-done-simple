import { registerBlockType } from '@wordpress/blocks';
 
registerBlockType( 'gfds/faq', {
    title: 'FAQ',
    icon: 'smiley',
    category: 'common',
    edit: () => <div>Hola, mundo!</div>,
    save: () => <div>Hola, mundo!</div>,
} );
