<?php
include 'list_files.php';

echo '<table><tr>';
echo "\n<td><hr>";
foreach(dnschanger2() as $name => $web): echo paparan($web,null); endforeach;
echo '</td>';
echo "\n<td><pre>";
print <<<END
#--------------------------------------------------------------------------------------------------
	function paparan(\$web, \$test)
	{
		# set pembolehubah utama
		\$p1 = 'pre';#https://www.w3schools.com/tags/tag_var.asp
		\$p2 = 'kbd';
		\$p3 = 'code';
		\$p4 = 'samp';
		\$kira = kiraPaparan();
		\$data = explode('|', \$web);
		\$semak01 = (\$kira[01] - strlen(\$data[1]) + 1);
		\$semak02 = (\$kira[02] - strlen(\$data[2]) + 1);
		\$semak03 = (\$kira[03] - strlen(\$data[3]) + 1);
		# papar
			\$p = "\\n&lt;\$p2>| " . \$data[1];
			for(\$i = 1; \$i < \$semak01; \$i++): \$p .= "&nbsp;"; endfor;
			\$p .=  "|" . \$data[2];
			for(\$i = 1; \$i < \$semak02; \$i++): \$p .= "&nbsp;"; endfor;
			\$p .= "|" . \$data[3];
			for(\$i = 1; \$i < \$semak03; \$i++): \$p .= "&nbsp;"; endfor;
			\$p .= "&nbsp;|&lt;/\$p2>&lt;hr>";
		#
		return \$p;
	}
#--------------------------------------------------------------------------------------------------
END;
echo '</pre></td>';
echo '</tr><table>';
