# ServiceJob

## Properties
Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**create_time** | [**\DateTime**](\DateTime.md) | The date and time of the creation of the job, in ISO 8601 format. | [optional] 
**service_job_id** | [**\Popsicle\Amazon\Model\Services\ServiceJobId**](ServiceJobId.md) |  | [optional] 
**service_job_status** | **string** | The status of the service job. | [optional] 
**scope_of_work** | [**\Popsicle\Amazon\Model\Services\ScopeOfWork**](ScopeOfWork.md) |  | [optional] 
**seller** | [**\Popsicle\Amazon\Model\Services\Seller**](Seller.md) |  | [optional] 
**service_job_provider** | [**\Popsicle\Amazon\Model\Services\ServiceJobProvider**](ServiceJobProvider.md) |  | [optional] 
**preferred_appointment_times** | [**\Popsicle\Amazon\Model\Services\AppointmentTime[]**](AppointmentTime.md) | A list of appointment windows preferred by the buyer. Included only if the buyer selected appointment windows when creating the order. | [optional] 
**appointments** | [**\Popsicle\Amazon\Model\Services\Appointment[]**](Appointment.md) | A list of appointments. | [optional] 
**service_order_id** | [**\Popsicle\Amazon\Model\Services\OrderId**](OrderId.md) |  | [optional] 
**marketplace_id** | **string** | The marketplace identifier. | [optional] 
**buyer** | [**\Popsicle\Amazon\Model\Services\Buyer**](Buyer.md) |  | [optional] 
**associated_items** | [**\Popsicle\Amazon\Model\Services\AssociatedItem[]**](AssociatedItem.md) | A list of items associated with the service job. | [optional] 
**service_location** | [**\Popsicle\Amazon\Model\Services\ServiceLocation**](ServiceLocation.md) |  | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)

