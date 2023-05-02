//* Imports
import { registerBlockType } from '@wordpress/blocks';
import {__} from '@wordpress/i18n'; //* Internationalization


//* import components
import {
	useBlockProps,
	InnerBlocks
} from '@wordpress/block-editor';


//* Template structure for blocks.
const TEMPLATE = [
	[
		'core/columns',
		{backgroundColor: 'yellow', verticalAlignment: 'center'},
		[
			[
				'core/column',
				{templateLock: 'all'},
				[
					['core/image'],
				]
			],
			[
				'core/column',
				{templateLock: 'all'},
				[
					[
						'create-block/first-block',
						{placeholder: 'Enter side content..'}
					]
				]
			],
		]
	]
];

/**
 * Every block starts by registering a new block type definition.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-registration/
 */
registerBlockType( 'ka-example-block/ka-example-container-block', {
	title: __('Ka Container block', 'ka-example-block'),
	category: 'design',

	edit({className}) {
		return(
			<div className={className}>
				<InnerBlocks
					template={TEMPLATE}
					templateLock='all'/>
			</div>
		)
	},

	save() {
		const blockProps = useBlockProps.save();
		return(
			<div {...blockProps}>
				<InnerBlocks.Content/>
			</div>
		)
	},
});
