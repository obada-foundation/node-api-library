# # Obit

## Properties

Name | Type | Description | Notes
------------ | ------------- | ------------- | -------------
**obit_did** | **string** | OBADA decentralized identifier | 
**usn** | **string** | Universal serial number | 
**obit_did_versions** | **string[]** | Client generated things. First hash + last hash | 
**owner_did** | **string** | Owner is the person/entity that owns the obit and the physical asset it represents. Format is a DID like did:obada:owner:1234. However in the current version only test numbers will be used. | 
**obd_did** | **string** | Future use. The OBD DID is formatted like did:obada:obd:1234, which represents a utility token tracking orders and proofs. | 
**obit_status** | **string** | Represent available Obit statuses:   - FUNCTIONAL   - NON_FUNCTIONAL   - DISPOSED   - STOLEN   - DISABLED_BY_OWNER | 
**manufacturer** | **string** | Waiting more specific details from Rohi | 
**part_number** | **string** | Manufacturer provided. In cases where no part number is provided for the product, use model, or the most specific ID available from the manufacturer. MWCN2LL/A (an iPhone 11 Pro, Silver, 256GB, model A2160) | 
**serial_number_hash** | **string** | Serial number hashed with sha256 hash function | 
**metadata** | **object[]** | Get description from Rohi | [optional] 
**doc_links** | **object[]** |  | [optional] 
**structured_data** | **object[]** |  | [optional] 
**modified_at** | [**\DateTime**](\DateTime.md) |  | [optional] 
**root_hash** | **string** | Hash calculated by SHA256 (previous Obit root hash + Obit data) | [optional] 

[[Back to Model list]](../../README.md#documentation-for-models) [[Back to API list]](../../README.md#documentation-for-api-endpoints) [[Back to README]](../../README.md)


