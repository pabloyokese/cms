<?php $this->load->view('admin/components/page_head');?>
<body style="background: #555;">
	<div class="modal show" role="dialog">
		<?php $this->load->view($subview); //subview is set in controller?>
		<div class="modal-footer">
		&copy; <?php echo $meta_title;?>
	</div>
	</div>
<?php $this->load->view('admin/components/page_tail');?>
