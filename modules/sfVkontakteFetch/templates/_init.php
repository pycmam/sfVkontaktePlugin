<? if (!is_null($sf_user->id) && $sf_user->id): ?>

<script type="text/javascript" language="javascript">
	App.profile_fields = '<?=implode(',', array_keys(sfConfig::get('app_vkontakte_profile_fields')))?>';
	App.fetch_url = '<?=url_for('@sf_vkontakte_fetch_profiles'); ?>';
	App.upload_photo_url = '<?=url_for('@sf_vkontakte_upload_photo'); ?>';
	App.need_fetch = <?=$sf_user->need_fetch?'true':'false'?>;
</script>

<div id='sf_vkontakte_install' style='display:none;'>Please install Application!</div>
<div id='sf_vkontakte_settings' style='display:none;'>Please set nessesary settings!</div>
<div id='sf_vkontakte_unnessesary_settings' style='display:none;'>Please set settings</div>

<? endif; ?>

