	var arr = str_split(content);
	var vokal = ['a', 'i', 'u', 'e', 'o'];
	var found = array_intersect(vokal, arr);
	var count = array_count_values(arr);
	var result = [];

	foreach(found as item){
	result = count(item);

	}
	return result;
}