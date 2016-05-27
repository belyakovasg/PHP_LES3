<!DOCTYPE html>
<html>
<head>
	<meta charset="UTF8">
	<title>Lesson 3</title>
</head>
<body>
	<h2><?php
	echo ("Домашняя работа. Урок №3.");?></h2>
	<ol>
		<li><?php
				$i = 0;
				while($i<=100) {//???
					if ($i%3==0) {
						echo ($i."</br>");
					}
					$i++; //??? или в if?
				}
			?>
		</li>
		<li><?php
			//$i = 0;
			//$n = 10;
			function event($i,$n) {
				do {
					if ($i==0) {
						echo ("$i - это ноль</br>");
					}
					elseif ($i%2!=0) {
						echo ("$i - нечетное число</br>");
					}
					else {
						echo ("$i - четное число</br>");
					}
				$i++;
				} while ($i <= $n);
			}
			event(0,10);
		?>
		</li>
		<li><?php
			for ($x=0; $x<10; $x++) echo $x;
		?>
		</li>
		<li><?php
			$region = [
				"Московская область" => ["Москва", "Одинцово", "Подольск"],
				"Тульская область" 	 => ["Тула", "Киреевск", "Новомосковск"],
				"Краснодарский край" => ["Краснодар", "Сочи", "Туапсе"]
			]; 
			foreach ($region as $sKey => $aCity) {
				echo '<b>'.$sKey.':</b></br>';
				foreach ($aCity as $city) {
					echo $city.'; ';
				} echo '</br>';
			}
		?>
		</li>
		<li><?php
			$region = [
				"Московская область" => ["Москва", "Одинцово", "Подольск"],
				"Тульская область" 	 => ["Тула", "Киреевск", "Новомосковск"],
				"Краснодарский край" => ["Краснодар", "Сочи", "Туапсе"]
			]; 
			foreach ($region as $sKey => $aCity) {
				echo '<b>'.$sKey.':</b></br>';
				foreach ($aCity as $city) {
					if (strpos($city, 'К') !== false){
						echo $city.'; ';
					}
				} echo '</br>';
			}
		?>
		</li>
		<li><?php
			function rus2translit($string) {
				$converter = array(
					'а' => 'a',   'б' => 'b',   'в' => 'v',
					'г' => 'g',   'д' => 'd',   'е' => 'e',
					'ё' => 'e',   'ж' => 'zh',  'з' => 'z',
					'и' => 'i',   'й' => 'y',   'к' => 'k',
					'л' => 'l',   'м' => 'm',   'н' => 'n',
					'о' => 'o',   'п' => 'p',   'р' => 'r',
					'с' => 's',   'т' => 't',   'у' => 'u',
					'ф' => 'f',   'х' => 'h',   'ц' => 'c',
					'ч' => 'ch',  'ш' => 'sh',  'щ' => 'sch',
					'ь' => '\'',  'ы' => 'y',   'ъ' => '\'',
					'э' => 'e',   'ю' => 'yu',  'я' => 'ya',
					
					'А' => 'A',   'Б' => 'B',   'В' => 'V',
					'Г' => 'G',   'Д' => 'D',   'Е' => 'E',
					'Ё' => 'E',   'Ж' => 'Zh',  'З' => 'Z',
					'И' => 'I',   'Й' => 'Y',   'К' => 'K',
					'Л' => 'L',   'М' => 'M',   'Н' => 'N',
					'О' => 'O',   'П' => 'P',   'Р' => 'R',
					'С' => 'S',   'Т' => 'T',   'У' => 'U',
					'Ф' => 'F',   'Х' => 'H',   'Ц' => 'C',
					'Ч' => 'Ch',  'Ш' => 'Sh',  'Щ' => 'Sch',
					'Ь' => '\'',  'Ы' => 'Y',   'Ъ' => '\'',
					'Э' => 'E',   'Ю' => 'Yu',  'Я' => 'Ya',
				);
				return strtr($string, $converter);
			}
			echo rus2translit('Света Белякова');
			
		?>
		</li>
		<li><?php
		function myReplace($string) {
			return str_replace(' ', '_', $string);
		}
		echo myReplace('Люблю грозу в начале мая');
		?></li>
		<li><?php
		 function constrUrlAnalog($str){
			return rus2translit(myReplace($str));
		 }
		 echo constrUrlAnalog('Люблю грозу в начлае мая');
		?></li>
	</ol>
</body>
</html>


	
