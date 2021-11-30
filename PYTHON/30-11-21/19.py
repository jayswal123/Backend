# Change value of a key in a nested dictionary

Employee = {
	'emp1': {
		'name': 'Lisa',
		'age': '29',
		'Designation':'Programmer'
			},
	'emp2': {
			'name': 'Steve',
			'age': '45',
			'Designation':'HR'
			}
}


Employee['name']='Kate'

print(Employee)
