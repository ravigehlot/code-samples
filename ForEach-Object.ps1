<#
    ForEach-Object
#>

# Create a JSON string
$json = '{
    "names": [
        {
            "firstName": "Ravi", 
            "lastName": "Gehlot"
        },
        {
            "firstName": "Eva", 
            "lastName": "Gehlot"
        }
    ]
}';

# Convert the JSON string into an object
$obj = Write-Output $json | ConvertFrom-Json;

# Display the object type
$type = $obj.getType();

# Loop on the object displaying the properties
if( $type.BaseType.Name -eq "Object") {
    Write-Host "Looping through the object properties";

    ForEach-Object {
        Write-Host $obj.names.firstName
    }    
}

