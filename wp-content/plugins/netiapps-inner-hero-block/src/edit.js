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

/**
 * Lets webpack process CSS, SASS or SCSS files referenced in JavaScript files.
 * Those files can contain any CSS code that gets applied to the editor.
 *
 * @see https://www.npmjs.com/package/@wordpress/scripts#using-css
 */
import './editor.scss';

import { TextControl, Button  } from "@wordpress/components";
import { MediaUpload, MediaUploadCheck } from "@wordpress/block-editor";
const  { compose } = wp.compose;
const { withSelect } = wp.data;

/**
 * The edit function describes the structure of your block in the context of the
 * editor. This represents what the editor will render when the block is used.
 *
 * @see https://developer.wordpress.org/block-editor/developers/block-api/block-edit-save/#edit
 *
 * @return {WPElement} Element to render.
 */
function Edit({ attributes, setAttributes, bgImage}) {

	const ALLOWED_MEDIA_TYPES = [ 'image' ];

	const onUpdateImage = ( image ) => {
		setAttributes( {
			imageId: image.id,
			imageUrl: image.url,
		} );
	};

	const onRemoveImage = () => {
		setAttributes({
			imageId: null,
			imageUrl: null,
		})
	}

	return (
		<div { ...useBlockProps() }>
			<div>
				<TextControl
					label={__("Title", "netiapps-inner-hero-block")}
					value={attributes.title}
					onChange={(val) => setAttributes({ title: val})}
				/>
			</div>

			{bgImage ? (
				<div className="bg-image-added">
					<img src={bgImage.source_url} alt={bgImage.alt_text}/>
					<Button onClick={onRemoveImage}> Remove Image</Button>
				</div>
			) : (
				<div className="bg-image-btn-holder">
					<MediaUploadCheck>
						<MediaUpload
							title={__("Background image", "netiapps-inner-hero-block")}
							allowedTypes={ ALLOWED_MEDIA_TYPES }
							onSelect={onUpdateImage}
							value={attributes.imageId}
							render={ ( { open } ) => (
								<Button onClick={ open }>Add background image</Button>
							) }

						/>
					</MediaUploadCheck>
				</div>
			)}

		</div>
	);
}

export default compose(
	withSelect((select, props) => {
		const { getMedia } = select('core')
		const { imageId} = props.attributes
		return {
			bgImage: imageId ? getMedia(imageId) : null
		}
	})
)(Edit)
