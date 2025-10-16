/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/packages/packages-block-editor/#useblockprops
 */
import { useBlockProps, InnerBlocks, InspectorControls } from '@wordpress/block-editor';

import { PanelBody, SelectControl } from '@wordpress/components';
import { useState } from 'react';
/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/reference-guides/block-api/block-edit-save/#edit
 *
 * @return {Element} Element to render.
 */
export default function Edit({ attributes, setAttributes }) {
	const { effect } = attributes;

	return (
		<>
			<InspectorControls>
				<PanelBody title={__('Settings', 'aos-block')}>
					<SelectControl
						label={__('Effect', 'aos-block')}
						value={effect}
						options={[
							{ label: __('Fade Up', 'aos-block'), value: 'fade-up' },
							{ label: __('Fade Down', 'aos-block'), value: 'fade-down' },
							{ label: __('Fade Left', 'aos-block'), value: 'fade-left' },
							{ label: __('Fade Right', 'aos-block'), value: 'fade-right' },
							{ label: __('Flip', 'aos-block'), value: 'flip-left' },
							{ label: __('Zoom In', 'aos-block'), value: 'zoom-in' },
						]}
						onChange={(newEffect) => setAttributes({ effect: newEffect })}
						__next40pxDefaultSize
						__nextHasNoMarginBottom
					/>
				</PanelBody>
			</InspectorControls>


			<div data-aos={effect} {...useBlockProps()}>
				<InnerBlocks />
			</div>
		</>
	);
}
