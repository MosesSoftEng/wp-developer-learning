/*
 * Admin dash edit UI.
 */


/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import {__} from '@wordpress/i18n';	// Localization.

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import {
	useBlockProps,
	RichText,
	AlignmentControl,
	BlockControls,
	InspectorControls,
	PanelColorSettings,
} from '@wordpress/block-editor';

import {
	TextControl,
	PanelBody,
	PanelRow,
	ToggleControl,
	ExternalLink
} from '@wordpress/components'

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit({attributes, setAttributes}) {
	const blockProps = useBlockProps();

	// Event handler for richtext.
	const onChangeContent = (newContent) => {
		setAttributes({content: newContent});
	};

	const onChangeAlign = (newAlign) => {
		setAttributes({align: newAlign === undefined ? 'none' : newAlign});
	};

	const onChangeTextColor = (newTextColor) => {
		setAttributes({textColor: newTextColor});
	};

	const onChangeBackgroundColor = (newBackgroundColor) => {
		setAttributes({backgroundColor: newBackgroundColor});
	};

	const onChangeKaLink = (newKaLink) => {
		setAttributes({kaLink: newKaLink === undefined ? '' : newKaLink});
	};

	const onChangeLinkLabel = (newLinkLabel) => {
		setAttributes({linkLabel: newLinkLabel === undefined ? '' : newLinkLabel});
	};

	const toggleNofollow = () => {
		setAttributes({hasLinkNofollow: !attributes.hasLinkNofollow});
	};

	return (
		<div {...blockProps}>
			{/** UI displayed in settings panel */}
			<InspectorControls>
				<PanelColorSettings
					title={__('Color Settings')}
					colorSettings={[
						{
							value: attributes.textColor,
							onChange: onChangeTextColor,
							label: __('Text color', 'first-block')
						},
						{
							value: attributes.backgroundColor,
							onChange: onChangeBackgroundColor,
							label: __('Background color', 'first-block')
						}
					]} />

				<PanelBody
					title={__('Link Settings', 'first-block')}
					initialOpen={true}>
					<PanelRow>
						<fieldset>
							<TextControl
								label={__('KA link', 'first-block')}
								value={attributes.kaLink}
								onChange={onChangeKaLink}
								help={__('Add link', 'first-block')}
							/>
						</fieldset>
					</PanelRow>

					<PanelRow>
						<fieldset>
							<TextControl
								label={__('Link label', 'first-block')}
								value={attributes.linkLabel}
								onChange={onChangeLinkLabel}
								help={__('Add link label', 'first-block')} />
						</fieldset>
					</PanelRow>

					<PanelRow>
						<fieldset>
							<ToggleControl
								label='Add rel = nofollow'
								help={
									attributes.hasLinkNofollow ? 'Has rel nofollow'
										: 'No rel nofollow'
								}
								checked={attributes.hasLinkNofollow}
								onChange={toggleNofollow} 
								/>
						</fieldset>
					</PanelRow>
				</PanelBody>
			</InspectorControls>

			{/** UI diplayed in block */}
			{/* <p {...useBlockProps()}>
				{__('First Block – hello from the editor!', 'first-block')}
			</p> */}

			<BlockControls>
				<AlignmentControl
					value={attributes.align}
					onChange={onChangeAlign}
				/>
			</BlockControls>

			<RichText
				tagName="p"	// tag name of editable HTML element.
				onChange={onChangeContent} // 
				allowedFormats={['core/bold', 'core/italic']}
				value={attributes.content}
				placeholder={_('Write your text..')}
				style={{
					textAlign: attributes.align,
					backgroundColor: attributes.backgroundColor,
					color: attributes.textColor
				}}
			/>

			<ExternalLink
				href={attributes.kaLink}
				classID='ka-button'
				rel={attributes.hasLinkFollow ? 'nofollow' : ''}
			>
				{attributes.linkLabel}
			</ExternalLink>
		</div>
	);
}
