		</div>
	</div>

	<div id="footer">
		<div class="jumbotron push-spaces">
			<strong>2010-2020 · @DavLabs - 
			<a href="mailto:daviigorsouza@hotmail.com">Para suporte clique aqui</a>  · 
  			</strong>.
		</div>
		<div class="jumbotron push-spaces">
			<strong><?php echo $this->lang->line('common_copryrights', date('Y')); ?> · 
			<a href="https://opensourcepos.org" target="_blank"><?php echo $this->lang->line('common_website'); ?></a>  · 
  			<?php echo $this->config->item('application_version'); ?> - <?php echo substr($this->config->item('commit_sha1'), 0, 6); ?></strong>.
		</div>
	</div>
</body>
</html>
