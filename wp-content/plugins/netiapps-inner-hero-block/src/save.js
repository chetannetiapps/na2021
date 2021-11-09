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
import { useBlockProps } from '@wordpress/block-editor';

const { withSelect }  = wp.data;
const { compose } = wp.compose

/**
 * The save function defines the way in which the different attributes should
 * be combined into the final markup, which is then serialized by the block
 * editor into `post_content`.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#save
 *
 * @return {WPElement} Element to render.
 */
export default function save({attributes}) {
	console.log(attributes);
	return (
		<div { ...useBlockProps.save() }>
			<div className="hero-block">
				{attributes.title && (
					<div className="container">
						<h1>
							{attributes.title}
						</h1>
					</div>
				)}
				{attributes.imageUrl && (
					<img src={attributes.imageUrl} alt={""}/>
				)}
			</div>
		</div>
	);
}

