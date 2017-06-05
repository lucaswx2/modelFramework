# modelFramework

Model class builded using the design patterns of MVC.
With this feature you will be able to use the most commons tools in software developer just following the conventions.

## Getting Started

Just clone this repository to your own folder.

### Prerequisites

To use this you'll need to have in your workplace PHP 5>, a database of your choice.

## Development

explaining the code

```
all():
	this method lists all the columns and lines in the table of the model.
```

```
find($params,$fields):
	this method find a field based on the arguments that you have been passed. Examples:
		if you pass a only ID like this: "$user->find(12);" you'll get the row that references this ID on the database;
		if you pass a array of IDs like this: "$user->find([1,2,8]);" you'll get the following rows of all IDs that you pass;
		also you can pass complex arguments like this one : "$user->find("WHERE age = 18 and id>=6","'age','name'");";	
	if you don't specify what fields you want in the second parameter, you'll get all the columns of the row.
```

```
update():
	this method update the fileds and rows that you want to. Examples:
		you need to pass the attributes and they new set like this "$user->update('SET name= 'Kyle, age = 15', "WHERE id = 3");
			alert: you have to follow the sintax of the example or this will to cause a error.
```

```
create():
	this method insert a new row in the table of the model. Examples:
		you need to pass only the parameters of the query, the columns of the table will be defined in the construction of the model class.
			"$user->create(["jorgin",25,"NY])
		note that in the user class that I use like a example the order of parameters are defined:
			UserClass : $this->attributes = ["nome","idade","cpf"];
```


## Authors

This mini framework was builded by me and have no ambicious interest, just for learning.


