<script type="text/javascript">
jQuery(document).ready(function() {

});
</script>
<style type="text/css">

</style>
<p>
	<div>
	<label for="<?php echo $this->get_field_id( 'title' ); ?>"><?php _e('Title:',$this->pluginDomain);?></label>
	<input class="widefat" id="<?php echo $this->get_field_id( 'title' ); ?>" name="<?php echo $this->get_field_name( 'title' ); ?>" type="text" value="<?php echo $instance['title']; ?>" />
	</div>
</p>