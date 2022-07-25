/**
 * Retrieves the translation of text.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-i18n/
 */
import { __ } from '@wordpress/i18n';

/**
 * React hook that is used to mark the block wrapper element.
 * It provides all the necessary props like the class name.
 *
 * @see https://developer.wordpress.org/block-editor/packages/packages-block-editor/#useBlockProps
 */
import { InnerBlocks, useBlockProps, getColorClassName } from '@wordpress/block-editor';
import Section from './section-tag.jsx';
import classnames from 'classnames';
import { Fragment } from '@wordpress/element';

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save({ attributes, className }) {

	const {
		tagName,
		backgroundColor,
		bgDesignType,
		bgWidth,
		overflow,
		bgColorTiles,
	} = attributes;
	const onChangeBgTiles = (bgColor, bgDesignType) => {
		let color = '';

		switch (bgColor) {
			case '#000000':
				color = bgDesignType == '' ? 'dc-container-black' : '';
				break;
			case '#666666':
				color = bgDesignType == '' ? 'dc-container-grey' : '';
				break;
		}
		return color;
	};

	const onChangeDesignType = (bgGradient) => {
		let dcgradient = '';

		switch (bgGradient) {
			case '#000':
				dcgradient = 'black-ctn';
				break;
			case '#eae6f5':
				dcgradient = 'lp-ctn';
				break;
			case '#5b3ea5':
				dcgradient = 'bp-ctn';
				break;
			case '#f1f3f5':
				dcgradient = 'aq-ctn';
				break;
			default:
				dcgradient = '';
		}
		return dcgradient;
	};

	const backgroundClass = getColorClassName('background-color', backgroundColor);
	const myCustomDesignClass = bgDesignType ? onChangeDesignType(bgDesignType) : undefined;
	const myCustomWidthClass = bgWidth ? bgWidth : undefined;
	const myCustomoverflowClass = overflow ? overflow : undefined;
	const myCustomColorClass = bgColorTiles ? onChangeBgTiles(bgColorTiles, bgDesignType) : '';

	const classes = classnames(
		{
			className,
			[myCustomDesignClass]: myCustomDesignClass,
			[myCustomWidthClass]: myCustomWidthClass,
			[myCustomColorClass]: myCustomColorClass,
			[backgroundClass]: backgroundClass,
			[myCustomoverflowClass]: myCustomoverflowClass,
		}
	);
	return (

		// <div {...useBlockProps.save()}>

		<Section tagName={tagName} className={classes ? classes : undefined}   >
			<div className="wrapper">

				<InnerBlocks.Content />
			</div>

		</Section>
		// </div>
	);
}
