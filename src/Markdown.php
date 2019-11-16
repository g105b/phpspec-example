<?php
class Markdown {
	public function toHtml(string $markdown):string {
		$html = "";

		foreach(explode("\n", $markdown) as $line) {
			if(ctype_alnum($line[0])) {
				$html = "<p>$line</p>";
			}
		}

		return $html;
	}
}
