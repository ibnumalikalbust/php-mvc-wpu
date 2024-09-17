<?php

class flasher {
	public static function setFlash ($type, $message) {
		$_SESSION['flash']['type'] = $type;
		$_SESSION['flash']['message'] = $message;
	}

	public static function useFlash () {
		if (isset($_SESSION['flash'])) {
			echo '
			<div class="alert alert-' . $_SESSION['flash']['type'] . ' alert-dismissible fade show" role="alert">
				<span>' . $_SESSION['flash']['message'] . '</span>
				<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
			</div>
			';
			unset($_SESSION['flash']);
		}
	}
}