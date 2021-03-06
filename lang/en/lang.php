<?php

return [
  'plugin' => [
    'name' => 'Photo Albums',
    'description' => 'Create, display and manage galleries of photos arranged in albums.',
    'settings_description' => 'Photo Albums plugin settings',
    'tab' => 'Photo Albums',
    'manage_albums' => 'Manage photo albums',
    'access_permission' => 'Access Settings',
    'upload_photos' => 'Upload photos',
    'new_album' => 'New album',
    'create_album' => 'Create album',
    'edit_album' => 'Edit album',
    'preview_album' => 'Preview album',
    'creating_album' => 'Creating album...',
    'saving_album' => 'Saving album...',
    'deleting_album' => 'Deleting album...',
    'list_title' => 'Manage albums',
    'album' => 'Album',
    'albums' => 'Albums',
    'manage_photos' => 'Manage photos',
    'new_photo' => 'New photo',
    'create_photo' => 'Create photo',
    'edit_photo' => 'Edit photo',
    'preview_photo' => 'Preview photo',
    'creating_photo' => 'Creating photo...',
    'saving_photo' => 'Saving photo...',
    'deleting_photo' => 'Deleting photo...',
    'photo' => 'Photo',
    'photos' => 'Photos',
    'photo_description' => 'Description',
    'set_front_button' => 'Set as front',
    'reorder_button' => 'Reorder photos',
    'bool_positive' => 'Yes',
    'reorder_title' => 'Reorder album :name',
    'reorder' => 'Reorder',
    'saving_upload' => 'Saving upload...',
    'upload_photos_title' => 'Upload multiple photos',
    'album_to_upload' => 'Album to upload to',
    'save_upload' => 'Save upload',
    'title_label' => 'Title',
    'title_placeholder_album' => 'Album title',
    'title_placeholder_photo' => 'Photo title',
    'created_label' => 'Created',
    'updated_label' => 'Updated',
    'slug_label' => 'Slug',
    'slug_description' => 'URL slug parameter',
    'slug_placeholder_album' => 'album-title',
    'description_label' => 'Description',
    'front_label' => 'Front',
    'code_label' => 'Code',
    'code_description' => 'Type in default markdown to use for photo insert. There are two placeholders: %id% and %title%, they will be replaced with photo id and photo title automatically.',
    'selecting_photo' => 'Selecting photo',
    'insert' => 'Insert',
    'not_selected' => 'Not selected',
    'back_to_albums' => 'Back to albums',
    'all_photo_albums' => 'All Photo Albums',
    'all_photos' => 'All Photos',
  ],
  'errors' => [
    'album_not_found' => 'Album not found!',
    'cant_find_selected' => 'Can\'t find selected photo!',
    'not_this_album' => 'Selected photo doesn\'t belong to this album!',
    'return_to_albums' => 'Return to albums list',
    'return_to_photos' => 'Return to photos list',
    'no_file' => 'No file in request',
    'invalid_file' => 'File :name is not valid.',
    'thumb_width_error' => 'Thumb width must be a number',
    'thumb_height_error' => 'Thumb height must be a number',
    'photos_on_page_error' => 'Photos on page value must be a number',
    'albums_on_page_error' => 'Albums on page value must be a number',
    'photos_count_error' => 'Photos count must be a number',
    'cache_lifetime_error' => 'Cache lifetime must be a number',
    'no_albums' => 'You don\'t have any albums yet.',
  ],
  'messages' => [
    'set_front' => 'Are you sure to set this photo as front for the album?',
    'delete' => 'Do you really want to delete this album?',
    'delete_photo' => 'Do you really want to delete this photo?',
    'photos_saved' => 'Photos are saved!',
  ],
  'components' => [
    'photo_description' => 'Single photo component',
    'album_description' => 'Component to output one photo album with all its photos.',
    'photo_page_label' => 'Photo page',
    'photo_page_description' => 'Page used to display a single photo',
    'thumb_mode_label' => 'Thumb mode',
    'thumb_mode_description' => 'Mode of thumb generation',
    'thumb_width_label' => 'Thumb width',
    'thumb_width_description' => 'Width of the thumb to be generated',
    'thumb_height_label' => 'Thumb height',
    'thumb_height_description' => 'Height of the thumb to be generated',
    'photos_on_page_label' => 'Photos on page',
    'photos_on_page_description' => 'Amount of photos on one page (to use in pagination)',
    'albums_on_page_label' => 'Albums on page',
    'albums_on_page_description' => 'Amount of albums on one page (to use in pagination)',
    'albums_list' => 'Albums list',
    'albums_list_description' => 'Lists all photo albums on site',
    'album_page_label' => 'Album page',
    'album_page_description' => 'Page used to display photo albums',
    'id_label' => 'ID',
    'id_description' => 'Photo id parameter',
    'random_photos' => 'Random Photos',
    'random_photos_description' => 'Output predefined number of random photos',
    'photos_count_label' => 'Photos to output',
    'photos_count_description' => 'Amount of random photos to output',
    'cache_lifetime_label' => 'Cache lifetime',
    'cache_lifetime_description' => 'Number of minutes selected photos are stored in cache. 0 for no caching.',
  ],
];
