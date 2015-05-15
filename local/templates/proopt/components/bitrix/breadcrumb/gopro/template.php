<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '<ul class="breadcrumb">';
for($index = 0, $itemSize = count($arResult); $index < $itemSize; $index++)
{
	if($index > 0)
		$strReturn .= '<li><span> / </span></li>';

	$title = htmlspecialcharsex($arResult[$index]["TITLE"]);
	if($arResult[$index]["LINK"] <> "")
	{
		$strReturn .= '<li';
		if($index==($itemSize-1))
		{
			$strReturn .= ' class="last"';
		}
		$strReturn .= '><a href="'.$arResult[$index]["LINK"].'" title="'.$title.'">'.$title.'</a></li>';
	} else {
		$strReturn .= '<li>'.$title.'</li>';
	}
}
$strReturn .= '</ul>';

return $strReturn;