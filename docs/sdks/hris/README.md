# Hris


### Available Operations

* [createHrisEmployee](#createhrisemployee) - Create an employee
* [createHrisGroup](#createhrisgroup) - Create a group
* [getHrisEmployee](#gethrisemployee) - Retrieve an employee
* [getHrisGroup](#gethrisgroup) - Retrieve a group
* [listHrisEmployees](#listhrisemployees) - List all employees
* [listHrisGroups](#listhrisgroups) - List all groups
* [patchHrisEmployee](#patchhrisemployee) - Update an employee
* [patchHrisGroup](#patchhrisgroup) - Update a group
* [removeHrisEmployee](#removehrisemployee) - Remove an employee
* [removeHrisGroup](#removehrisgroup) - Remove a group
* [updateHrisEmployee](#updatehrisemployee) - Update an employee
* [updateHrisGroup](#updatehrisgroup) - Update a group

## createHrisEmployee

Create an employee

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateHrisEmployeeRequest();
    $request->hrisEmployee = new Shared\HrisEmployee();
    $request->hrisEmployee->address = new Shared\PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = '<value>';
    $request->hrisEmployee->address->address2 = '<value>';
    $request->hrisEmployee->address->city = 'Armstrongborough';
    $request->hrisEmployee->address->country = 'Indonesia';
    $request->hrisEmployee->address->countryCode = 'MO';
    $request->hrisEmployee->address->postalCode = '23995';
    $request->hrisEmployee->address->region = '<value>';
    $request->hrisEmployee->address->regionCode = '<value>';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-10-07T16:11:17.542Z');
    $request->hrisEmployee->currency = 'Tunisian Dinar';
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-09-15T21:52:09.133Z');
    $request->hrisEmployee->department = '<value>';
    $request->hrisEmployee->division = '<value>';
    $request->hrisEmployee->emails = [
        new Shared\HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = '<value>';
    $request->hrisEmployee->employmentStatus = Shared\EmploymentStatus::Active;
    $request->hrisEmployee->employmentType = Shared\HrisEmployeeEmploymentType::FullTime;
    $request->hrisEmployee->gender = Shared\HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-08T04:47:23.458Z');
    $request->hrisEmployee->id = '<id>';
    $request->hrisEmployee->imageUrl = '<value>';
    $request->hrisEmployee->languageLocale = '<value>';
    $request->hrisEmployee->location = '<value>';
    $request->hrisEmployee->managerId = '<value>';
    $request->hrisEmployee->maritalStatus = Shared\MaritalStatus::Married;
    $request->hrisEmployee->name = '<value>';
    $request->hrisEmployee->raw = [
        'Deckow' => '<value>',
    ];
    $request->hrisEmployee->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-06-06T17:06:15.004Z');
    $request->hrisEmployee->timezone = 'Australia/Melbourne';
    $request->hrisEmployee->title = '<value>';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-02-26T16:14:34.561Z');
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateHrisEmployeeSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->hris->createHrisEmployee($request, $requestSecurity);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateHrisEmployeeRequest](../../Models/Operations/CreateHrisEmployeeRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\CreateHrisEmployeeSecurity](../../Models/Operations/CreateHrisEmployeeSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateHrisEmployeeResponse](../../Models/Operations/CreateHrisEmployeeResponse.md)**


## createHrisGroup

Create a group

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\CreateHrisGroupRequest();
    $request->hrisGroup = new Shared\HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-12T02:07:27.193Z');
    $request->hrisGroup->description = 'Self-enabling system-worthy collaboration';
    $request->hrisGroup->id = '<id>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        '<value>',
    ];
    $request->hrisGroup->name = '<value>';
    $request->hrisGroup->parentId = '<value>';
    $request->hrisGroup->raw = [
        'South' => '<value>',
    ];
    $request->hrisGroup->type = Shared\HrisGroupType::Department;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-28T15:45:30.103Z');
    $request->hrisGroup->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';;

    $requestSecurity = new Operations\CreateHrisGroupSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->hris->createHrisGroup($request, $requestSecurity);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateHrisGroupRequest](../../Models/Operations/CreateHrisGroupRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\CreateHrisGroupSecurity](../../Models/Operations/CreateHrisGroupSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\CreateHrisGroupResponse](../../Models/Operations/CreateHrisGroupResponse.md)**


## getHrisEmployee

Retrieve an employee

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetHrisEmployeeRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetHrisEmployeeSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->hris->getHrisEmployee($request, $requestSecurity);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetHrisEmployeeRequest](../../Models/Operations/GetHrisEmployeeRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\GetHrisEmployeeSecurity](../../Models/Operations/GetHrisEmployeeSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisEmployeeResponse](../../Models/Operations/GetHrisEmployeeResponse.md)**


## getHrisGroup

Retrieve a group

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\GetHrisGroupRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->id = '<id>';;

    $requestSecurity = new Operations\GetHrisGroupSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->hris->getHrisGroup($request, $requestSecurity);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                     | Type                                                                                                          | Required                                                                                                      | Description                                                                                                   |
| ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                    | [\Unified\Unified_to\Models\Operations\GetHrisGroupRequest](../../Models/Operations/GetHrisGroupRequest.md)   | :heavy_check_mark:                                                                                            | The request object to use for the request.                                                                    |
| `security`                                                                                                    | [\Unified\Unified_to\Models\Operations\GetHrisGroupSecurity](../../Models/Operations/GetHrisGroupSecurity.md) | :heavy_check_mark:                                                                                            | The security requirements to use for the request.                                                             |


### Response

**[?\Unified\Unified_to\Models\Operations\GetHrisGroupResponse](../../Models/Operations/GetHrisGroupResponse.md)**


## listHrisEmployees

List all employees

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListHrisEmployeesRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 5148.12;
    $request->offset = 2185.43;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-04-10T00:54:40.984Z');;

    $requestSecurity = new Operations\ListHrisEmployeesSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->hris->listHrisEmployees($request, $requestSecurity);

    if ($response->hrisEmployees !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListHrisEmployeesRequest](../../Models/Operations/ListHrisEmployeesRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\ListHrisEmployeesSecurity](../../Models/Operations/ListHrisEmployeesSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\ListHrisEmployeesResponse](../../Models/Operations/ListHrisEmployeesResponse.md)**


## listHrisGroups

List all groups

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\ListHrisGroupsRequest();
    $request->connectionId = '<value>';
    $request->fields = [
        '<value>',
    ];
    $request->limit = 4815.14;
    $request->offset = 2554.75;
    $request->order = '<value>';
    $request->query = '<value>';
    $request->sort = '<value>';
    $request->updatedGte = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-04-30T00:40:26.357Z');;

    $requestSecurity = new Operations\ListHrisGroupsSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->hris->listHrisGroups($request, $requestSecurity);

    if ($response->hrisGroups !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\ListHrisGroupsRequest](../../Models/Operations/ListHrisGroupsRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\ListHrisGroupsSecurity](../../Models/Operations/ListHrisGroupsSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\ListHrisGroupsResponse](../../Models/Operations/ListHrisGroupsResponse.md)**


## patchHrisEmployee

Update an employee

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchHrisEmployeeRequest();
    $request->hrisEmployee = new Shared\HrisEmployee();
    $request->hrisEmployee->address = new Shared\PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = '<value>';
    $request->hrisEmployee->address->address2 = '<value>';
    $request->hrisEmployee->address->city = 'Zettaland';
    $request->hrisEmployee->address->country = 'Mexico';
    $request->hrisEmployee->address->countryCode = 'DJ';
    $request->hrisEmployee->address->postalCode = '87892';
    $request->hrisEmployee->address->region = '<value>';
    $request->hrisEmployee->address->regionCode = '<value>';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-07-12T22:40:07.218Z');
    $request->hrisEmployee->currency = 'Venezuelan bolívar';
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-04T03:46:56.564Z');
    $request->hrisEmployee->department = '<value>';
    $request->hrisEmployee->division = '<value>';
    $request->hrisEmployee->emails = [
        new Shared\HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = '<value>';
    $request->hrisEmployee->employmentStatus = Shared\EmploymentStatus::Inactive;
    $request->hrisEmployee->employmentType = Shared\HrisEmployeeEmploymentType::PartTime;
    $request->hrisEmployee->gender = Shared\HrisEmployeeGender::Male;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-05-20T23:12:44.407Z');
    $request->hrisEmployee->id = '<id>';
    $request->hrisEmployee->imageUrl = '<value>';
    $request->hrisEmployee->languageLocale = '<value>';
    $request->hrisEmployee->location = '<value>';
    $request->hrisEmployee->managerId = '<value>';
    $request->hrisEmployee->maritalStatus = Shared\MaritalStatus::Single;
    $request->hrisEmployee->name = '<value>';
    $request->hrisEmployee->raw = [
        'Nissan' => '<value>',
    ];
    $request->hrisEmployee->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-08-11T17:51:00.187Z');
    $request->hrisEmployee->timezone = 'Europe/Lisbon';
    $request->hrisEmployee->title = '<value>';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-12-01T15:09:08.937Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchHrisEmployeeSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->hris->patchHrisEmployee($request, $requestSecurity);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                               | Type                                                                                                                    | Required                                                                                                                | Description                                                                                                             |
| ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchHrisEmployeeRequest](../../Models/Operations/PatchHrisEmployeeRequest.md)   | :heavy_check_mark:                                                                                                      | The request object to use for the request.                                                                              |
| `security`                                                                                                              | [\Unified\Unified_to\Models\Operations\PatchHrisEmployeeSecurity](../../Models/Operations/PatchHrisEmployeeSecurity.md) | :heavy_check_mark:                                                                                                      | The security requirements to use for the request.                                                                       |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisEmployeeResponse](../../Models/Operations/PatchHrisEmployeeResponse.md)**


## patchHrisGroup

Update a group

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\PatchHrisGroupRequest();
    $request->hrisGroup = new Shared\HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-11-10T03:17:00.454Z');
    $request->hrisGroup->description = 'Compatible contextually-based local area network';
    $request->hrisGroup->id = '<id>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        '<value>',
    ];
    $request->hrisGroup->name = '<value>';
    $request->hrisGroup->parentId = '<value>';
    $request->hrisGroup->raw = [
        'indexing' => '<value>',
    ];
    $request->hrisGroup->type = Shared\HrisGroupType::BusinessUnit;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-01-01T11:47:16.863Z');
    $request->hrisGroup->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\PatchHrisGroupSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->hris->patchHrisGroup($request, $requestSecurity);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                         | Type                                                                                                              | Required                                                                                                          | Description                                                                                                       |
| ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- | ----------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchHrisGroupRequest](../../Models/Operations/PatchHrisGroupRequest.md)   | :heavy_check_mark:                                                                                                | The request object to use for the request.                                                                        |
| `security`                                                                                                        | [\Unified\Unified_to\Models\Operations\PatchHrisGroupSecurity](../../Models/Operations/PatchHrisGroupSecurity.md) | :heavy_check_mark:                                                                                                | The security requirements to use for the request.                                                                 |


### Response

**[?\Unified\Unified_to\Models\Operations\PatchHrisGroupResponse](../../Models/Operations/PatchHrisGroupResponse.md)**


## removeHrisEmployee

Remove an employee

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveHrisEmployeeRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveHrisEmployeeSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->hris->removeHrisEmployee($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeRequest](../../Models/Operations/RemoveHrisEmployeeRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeSecurity](../../Models/Operations/RemoveHrisEmployeeSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveHrisEmployeeResponse](../../Models/Operations/RemoveHrisEmployeeResponse.md)**


## removeHrisGroup

Remove a group

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\RemoveHrisGroupRequest();
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\RemoveHrisGroupSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->hris->removeHrisGroup($request, $requestSecurity);

    if ($response->statusCode === 200) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveHrisGroupRequest](../../Models/Operations/RemoveHrisGroupRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\RemoveHrisGroupSecurity](../../Models/Operations/RemoveHrisGroupSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\RemoveHrisGroupResponse](../../Models/Operations/RemoveHrisGroupResponse.md)**


## updateHrisEmployee

Update an employee

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateHrisEmployeeRequest();
    $request->hrisEmployee = new Shared\HrisEmployee();
    $request->hrisEmployee->address = new Shared\PropertyHrisEmployeeAddress();
    $request->hrisEmployee->address->address1 = '<value>';
    $request->hrisEmployee->address->address2 = '<value>';
    $request->hrisEmployee->address->city = 'North Alfurt';
    $request->hrisEmployee->address->country = 'Thailand';
    $request->hrisEmployee->address->countryCode = 'ST';
    $request->hrisEmployee->address->postalCode = '60601-3179';
    $request->hrisEmployee->address->region = '<value>';
    $request->hrisEmployee->address->regionCode = '<value>';
    $request->hrisEmployee->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-06-07T16:21:55.126Z');
    $request->hrisEmployee->currency = 'Zimbabwe Dollar';
    $request->hrisEmployee->dateOfBirth = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-05-03T23:33:19.708Z');
    $request->hrisEmployee->department = '<value>';
    $request->hrisEmployee->division = '<value>';
    $request->hrisEmployee->emails = [
        new Shared\HrisEmail(),
    ];
    $request->hrisEmployee->employeeNumber = '<value>';
    $request->hrisEmployee->employmentStatus = Shared\EmploymentStatus::Active;
    $request->hrisEmployee->employmentType = Shared\HrisEmployeeEmploymentType::Volunteer;
    $request->hrisEmployee->gender = Shared\HrisEmployeeGender::NonBinary;
    $request->hrisEmployee->hiredAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-08-20T07:53:27.713Z');
    $request->hrisEmployee->id = '<id>';
    $request->hrisEmployee->imageUrl = '<value>';
    $request->hrisEmployee->languageLocale = '<value>';
    $request->hrisEmployee->location = '<value>';
    $request->hrisEmployee->managerId = '<value>';
    $request->hrisEmployee->maritalStatus = Shared\MaritalStatus::Single;
    $request->hrisEmployee->name = '<value>';
    $request->hrisEmployee->raw = [
        'Senior' => '<value>',
    ];
    $request->hrisEmployee->telephones = [
        new Shared\HrisTelephone(),
    ];
    $request->hrisEmployee->terminatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2023-11-09T06:17:10.243Z');
    $request->hrisEmployee->timezone = 'Africa/Casablanca';
    $request->hrisEmployee->title = '<value>';
    $request->hrisEmployee->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2024-03-13T20:08:58.858Z');
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateHrisEmployeeSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->hris->updateHrisEmployee($request, $requestSecurity);

    if ($response->hrisEmployee !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                                 | Type                                                                                                                      | Required                                                                                                                  | Description                                                                                                               |
| ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeRequest](../../Models/Operations/UpdateHrisEmployeeRequest.md)   | :heavy_check_mark:                                                                                                        | The request object to use for the request.                                                                                |
| `security`                                                                                                                | [\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeSecurity](../../Models/Operations/UpdateHrisEmployeeSecurity.md) | :heavy_check_mark:                                                                                                        | The security requirements to use for the request.                                                                         |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateHrisEmployeeResponse](../../Models/Operations/UpdateHrisEmployeeResponse.md)**


## updateHrisGroup

Update a group

### Example Usage

```php
<?php

declare(strict_types=1);

require 'vendor/autoload.php';

use \Unified\Unified_to;
use \Unified\Unified_to\Models\Operations;
use \Unified\Unified_to\Models\Shared;

$sdk = Unified_to\UnifiedTo::builder()->build();

try {
        $request = new Operations\UpdateHrisGroupRequest();
    $request->hrisGroup = new Shared\HrisGroup();
    $request->hrisGroup->createdAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-12-07T01:08:49.621Z');
    $request->hrisGroup->description = 'Integrated empowering productivity';
    $request->hrisGroup->id = '<id>';
    $request->hrisGroup->isActive = false;
    $request->hrisGroup->managerIds = [
        '<value>',
    ];
    $request->hrisGroup->name = '<value>';
    $request->hrisGroup->parentId = '<value>';
    $request->hrisGroup->raw = [
        'Southwest' => '<value>',
    ];
    $request->hrisGroup->type = Shared\HrisGroupType::Team;
    $request->hrisGroup->updatedAt = DateTime::createFromFormat('Y-m-d\TH:i:s+', '2022-03-09T14:54:15.549Z');
    $request->hrisGroup->userIds = [
        '<value>',
    ];
    $request->connectionId = '<value>';
    $request->id = '<id>';;

    $requestSecurity = new Operations\UpdateHrisGroupSecurity();
    $requestSecurity->jwt = '<YOUR_API_KEY_HERE>';

    $response = $sdk->hris->updateHrisGroup($request, $requestSecurity);

    if ($response->hrisGroup !== null) {
        // handle response
    }
} catch (Throwable $e) {
    // handle exception
}
```

### Parameters

| Parameter                                                                                                           | Type                                                                                                                | Required                                                                                                            | Description                                                                                                         |
| ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- | ------------------------------------------------------------------------------------------------------------------- |
| `$request`                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateHrisGroupRequest](../../Models/Operations/UpdateHrisGroupRequest.md)   | :heavy_check_mark:                                                                                                  | The request object to use for the request.                                                                          |
| `security`                                                                                                          | [\Unified\Unified_to\Models\Operations\UpdateHrisGroupSecurity](../../Models/Operations/UpdateHrisGroupSecurity.md) | :heavy_check_mark:                                                                                                  | The security requirements to use for the request.                                                                   |


### Response

**[?\Unified\Unified_to\Models\Operations\UpdateHrisGroupResponse](../../Models/Operations/UpdateHrisGroupResponse.md)**

