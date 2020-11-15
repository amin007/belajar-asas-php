<?php
include 'list_files.php';

echo '<table><tr>';
echo "\n<td>"; test_files(); echo '</td>';
echo "\n<td><pre>";
print <<<END
#--------------------------------------------------------------------------------------------------
	function test_files()
	{
		# pembolehubah asas
		\$ipAdd = get_client_ip();
		\$failIni = basename(\$_SERVER['PHP_SELF']);
		\$phpVersion = paparVersiPhp();
		\$kira[01] = \$kira[02] = \$kira[03] = 0;
		\$s1 = \$s2 = \$s3 = '';

		# papar fail//diatas();
		foreach(dnschanger2() as \$name => \$web):
			\$data = explode('|', \$web);
			if(strlen(\$data[1]) > \$kira[01]) \$kira[01] = strlen(\$data[1]);
			if(strlen(\$data[2]) > \$kira[02]) \$kira[02] = strlen(\$data[2]);
			if(strlen(\$data[3]) > \$kira[03]) \$kira[03] = strlen(\$data[3]);
		endforeach;
		echo "&lt;pre>";
		foreach(dnschanger2() as \$name => \$web):
			\$data = explode('|', \$web);
			\$g = "\\n+-"; for(\$i = 1;\$i < \$kira[01]; \$i++): \$g .= '-'; endfor;
			\$g .= '-+'; for(\$i = 1;\$i < \$kira[02]; \$i++): \$g .= '-'; endfor;
			\$g .= '-+'; for(\$i = 1;\$i < \$kira[03]; \$i++): \$g .= '-'; endfor;
			\$g .= '--+';
			for(\$i = 1; \$i < (\$kira[01] - strlen(\$data[1]) + 1); \$i++): \$s1.=" "; endfor;
			for(\$i = 1; \$i < (\$kira[02] - strlen(\$data[2]) + 1); \$i++): \$s2.=" "; endfor;
			for(\$i = 1; \$i < (\$kira[03] - strlen(\$data[3]) + 1); \$i++): \$s3.=" "; endfor;
			# papar
			echo "\$g\\n| " . \$data[1] . "\$s1|" . \$data[2] . "\$s2|" . \$data[3]. "\$s3 |";
			\$s1 = \$s2 = \$s3 = '';
		endforeach; echo \$g . '&lt;/pre>';

	}
#--------------------------------------------------------------------------------------------------
END;
echo '</pre></td>';
echo '</tr><table>';
