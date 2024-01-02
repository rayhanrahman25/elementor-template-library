<script type="text/template" id="tmpl-ts-el-studio-header-preview">
<div class="elementor-templates-modal__header ts-el-studio__header ts-el-studio__header--preview">

	<div id="elementor-template-library-header-preview-back" class="ts-el-studio__header__back">
		<i class="eicon-" aria-hidden="true"></i>
		<span><?php esc_html_e('Back to Listing', 'bunyad-admin'); ?></span>
	</div>

	<div class="elementor-templates-modal__header__menu-area"></div>
	
	<div class="elementor-templates-modal__header__items-area">
		<div class="elementor-templates-modal__header__close elementor-templates-modal__header__close--normal elementor-templates-modal__header__item" title="<?php esc_html_e('Close', 'bunyad-admin'); ?>">
			<i class="eicon-close" title="Close"></i>
		</div>
		<div id="elementor-template-library-header-tools">
			<div id="elementor-template-library-header-preview">
				<div id="elementor-template-library-header-preview-insert-wrapper" class="elementor-templates-modal__header__item">
		
				<# if (data.livePreview) { #>
					<a href="{{ data.livePreview }}" target="_blank" class="ts-el-studio__btn_preview elementor-button">
						<span class="elementor-button-title"><?php esc_html_e('Full Preview', 'bunyad-admin'); ?></span>
					</a>
				<# } #>

				<a data-id="{{ data.id }}" class="ts-el-studio__insert elementor-template-library-template-action elementor-template-library-template-insert elementor-button">
					<i class="eicon-file-download" aria-hidden="true"></i>
					<span class="elementor-button-title"><?php esc_html_e('Insert', 'bunyad-admin'); ?></span>
				</a>

				</div>
			</div>
		</div>
	</div>
</div>
</script>
