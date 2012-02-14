<div class="panel-body">
	<div id="settings" class="controls" data-settings-bucket-id="<?php echo $bucket->id; ?>">
		<div class="row cf">
			<!-- collaborators -->
			<?php echo $collaborators_control; ?>
			<!-- /collaborators -->
		</div>

		<!-- NEW: Publish status control -->
		<div class="row cf">
			<h2><?php echo __("Access"); ?></h2>
			<div class="input">
				<h3>Do you want this bucket to be viewable to the public?</h3>
				<select>
					<option value="">Yes</option>
					<option value="">No</option>
				</select>
			</div>
		</div>
		<!-- /NEW: Publish status control -->
		
		<div class="row controls-buttons cf">
			<p class="button-go"><a href="#">Apply changes</a></p>
			<p class="other"><a class="close" onclick="">Cancel</a></p>
			<div class="item actions">
				<p class="button-delete button-delete-subtle"><a onclick="">Delete Bucket</a></p>
				<div class="clear"></div>
				<ul class="dropdown">
					<p>Are you sure you want to delete this Bucket?</p>
					<li class="confirm"><a onclick="">Yep.</a></li>
					<li class="cancel"><a onclick="">No, nevermind.</a></li>
				</ul>
			</div>
		</div>
	</div>
</div>

<?php echo $settings_js; ?>