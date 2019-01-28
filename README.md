## IOTFetchServer
IOT fetch server is a new multilingual IOT fetch and post server.
it is not currently deployed in this repo.
How is it meant to work :
# step 1)choose your server base
switch to your language branch and follow the start instruction (will probably be make databaseType)
# step 2)add data
fetch your new server on ip/addData with a post method and the field you want to send
fetch localhost/addData with 
test=data+1&test2=data&2
options: you cannot name your field fusion: if set to 1, it will make a combined database.
Else, it will create 1 database by field

# step 3) retrieve your data 
fetch your server with address/getData and properties=[array of names] and fusedProperties=[array of [array of field names] ]
