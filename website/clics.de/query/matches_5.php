<?php if($result['families'] < 2){
?>
<tr>
    <td>
	<?php echo $result['glossB'];?>
    </td>
    <td>
	<?php echo $result['numB'];?>
    </td>
    <td>
	<?php echo $result['families'];?>
    </td>
    <td>
	<?php echo $result['languages'];?>
    </td>
<?php 
}
else{
?>
<tr>
    <td style="background-color:lightgray">
	<?php echo $result['glossB'];?>
    </td>
    <td style="background-color:lightgray">
	<?php echo $result['numB'];?>
    </td>
    <td style="background-color:lightgray">
	<?php echo $result['families'];?>
    </td>
    <td style="background-color:lightgray">
	<?php echo $result['languages'];?>
    </td>
<?php 
}
?>
    <form action="all.php" method="post">
    <td class="submit_button">
	<input type="submit" class="query_ok" value="FORMS"/>
	<input type="hidden" name="forms" value=<?php echo $result['forms'];?> />
	<input type="hidden" name="glossA" value=<?php echo $result['glossA'];?> />
	<input type="hidden" name="glossB" value=<?php echo $result['glossB'];?> />
    </td>
    </form>
</tr>