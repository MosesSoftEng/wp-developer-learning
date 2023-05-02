/*
 * UI to be diaplayed on frontend, saved in database.
 */

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {useBlockProps, RichText} from '@wordpress/block-editor';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save({attributes}) {
	// const blockProps = useBlockProps.save();
	const blockProps = useBlockProps({
		className: `has-text-align-${attributes.align}`
	});

	return (
		<div
			{...blockProps}
			style={{textAlign: attributes.align, backgroundColor: attributes.backgroundColor, color: attributes.textColor}}
		>
			{/* Display static content */}
			{/* <p {...useBlockProps.save()}>
				{'First Block – hello from the saved content!'}
			</p> */}

			{/* Display richtext content set in admin UI */}
			<RichText.Content
				tagName="p"
				value={attributes.content}
				style={{textAlign: attributes.align, color: attributes.textColor}}
			/>

			{/* Display a external link */}
			<p>
				<a
					href={attributes.kaLink}
					className='ka-button'
					rel={attributes.hasLinkNofollow ? 'nofollow' : 'noopener noreferrer'}>
					{attributes.linkLabel}
				</a>
			</p>
		</div>
	);
}
