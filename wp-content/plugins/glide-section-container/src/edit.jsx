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
import { InspectorControls, InnerBlocks, useBlockProps, getColorClassName } from '@wordpress/block-editor';
import { Panel, PanelBody, PanelRow, RadioControl, ColorPalette } from '@wordpress/components';
import { more } from '@wordpress/icons';
import classnames from 'classnames';
import Section from './section-tag.jsx';
import { Fragment } from '@wordpress/element';
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
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
export default function Edit(props) {
	const {
		attributes,
		setAttributes,
	} = props;
	const { tagName, bgDesignType, bgWidth,overflow, bgColorTiles, backgroundColor } = attributes;


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

	const onChangeTileandDesign = (bgDesign, bgTile) => {
		let colorcode = '#eeeeee';

		if (bgDesign == '' && bgTile != '') {
			colorcode = bgTile;
		} else if (bgDesign == 'transparent' && bgTile != '') {
			colorcode = bgTile;
		} else {
			colorcode = bgDesign;
		}

		return colorcode;
	};
	const myCustomWidthClass = bgWidth ? 'content-width-border editor-' + bgWidth : undefined;
	const myCustomoverflowClass = overflow ? 'content-width-border editor-' + overflow : undefined;
	const myCustomDesignClass = bgDesignType ? 'editor-' + onChangeDesignType(bgDesignType) : undefined;
	const classes = classnames(
		{
			[myCustomWidthClass]: myCustomWidthClass,
			[myCustomDesignClass]: myCustomDesignClass,
			[myCustomoverflowClass]: myCustomoverflowClass,
		}
	);
	const blockProps = useBlockProps({
		className: classes
	})
	return (

		<div  {...blockProps}>

			<InspectorControls>
				<Panel>
					<PanelBody title={__('Container Width')} initialOpen={true}>

						<PanelRow>
							<RadioControl
								help={__('Please choose container width.')}
								selected={bgWidth}
								options={[

									{ label: "Width 1240px (Default)", value: "ctn" },
									{ label: "Width 1040px", value: "ctn-1040" },
									{ label: "Width 830px", value: "ctn-830" },
									{ label: "Full Width Container", value: "full-width-ctn" },
								]
								}
								onChange={(value) => setAttributes({
									bgWidth: value,
								})}
							/>
						</PanelRow>
					</PanelBody>
					<PanelBody title={__('Container Overflow')} initialOpen={true}>

						<PanelRow>
							<RadioControl
								help={__('Please choose container Overflow.')}
								selected={overflow}
								options={[

									{ label: "Overflow Hidden", value: "overflow-hidden" },
									{ label: "No Overflow", value: "" },
								]
								}
								onChange={(value) => setAttributes({
									overflow: value,
								})}
							/>
						</PanelRow>
					</PanelBody>
					<PanelBody
						title={__('Background Design')}
						className="dc-design-style"
						initialOpen={true}
					>
						<ColorPalette
							value={bgDesignType}
							clearable={false}
							disableCustomColors={true}
							colors={[
								{ name: 'Container Black', color: '#000' },
								{ name: 'Container Light Purple', color: '#eae6f5' },
								{ name: 'Container Bright Purple', color: '#5b3ea5' },
								{ name: 'Container Aqua', color: '#f1f3f5' },
							]}
							onChange={(color) => setAttributes({
								bgDesignType: color,
							})}
						/>
					</PanelBody>
				</Panel>

			</InspectorControls>
			<Section
				tagName={tagName}
				className={
					'wp-block-glide-section-container-ctn',
					classnames(onChangeDesignType(bgDesignType), bgWidth ? bgWidth : undefined)
				}
			>
				<InnerBlocks />
			</Section>
		</div>
	);
}
