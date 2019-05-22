# # NavigationEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | a unique id for this event | 
**type** | **string** | the type of the event | 
**actor** | **string** | string containing the userid of the actor | 
**object** | **string** | the content identifier of the digital resource this event relates to. This is the course stream identifier | 
**event_time** | [**\DateTime**](\DateTime.md) | timestamp on which the event occured | 
**session_id** | **string** | id of the session | [optional] 
**action** | **string** | the specific action that is recorded | 
**target** | **string** | Url of the page that is navigated to | [optional] 
**referer** | **string** | Url of the page that is navigated from | [optional] 
**session** | **string** | The id of the session this event belongs to | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


