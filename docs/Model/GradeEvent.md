# # GradeEvent

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
**action** | **string** | the specific action that is recorded | 
**target** | **string** | Content element within the object that is graded. This must be the contentidentifier that matches the standard. | 
**attempt** | **int** | Id of the attempt, you can use the attempt count for this 1, 2, 3 ... | 
**max_result_score** | **float** | Maximum possible score | 
**result_score** | **float** | Acheived score | 
**actor_score** | **string** | Scored by the teacher or student | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


