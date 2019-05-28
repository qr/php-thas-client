# # ViewEvent

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**id** | **string** | a unique id for this event | 
**type** | **string** | the type of the event | 
**actor** | **string** | string containing the userid of the actor | 
**role** | **string** | string containing the role of the actor | [optional] 
**object** | **string** | the content identifier of the digital resource this event relates to. This is the stream identifier. | 
**event_time** | [**\DateTime**](\DateTime.md) | timestamp on which the event occured | 
**session_id** | **string** | id of the session | [optional] 
**target** | **string** | Content element (theory, reading, assigment) within the stream. This must be the contentidentifier that matches the standard. | 
**action** | **string** | the specific action that is recorded | 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


