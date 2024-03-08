# Models

## Actor

```json
{
  "@context": [
    "https://www.w3.org/ns/activitystreams"
  ],
  "type": "Person",
  "id": "https://example.com/@actor",
  "preferredUsername": "actor",
  "following": "",
  "followers": "",
  "liked": "",
  "inbox": "https://example.com/@actor/inbox",
  "outbox": "https://example.com/@actor/outbox",
  "publicKey": {
    "id": "https://example.com/actor#main-key",
    "owner": "https://example.com/actor",
    "publicKeyPem": "<PUBLIC KEY>"
  }
}

```

## Message
```json
{
  "@context": "https://www.w3.org/ns/activitystreams",
  
  
  "id": "https://example.com/create-hello-world",
  "type": "Create",
  "actor": "https://example.com/actor",
  
  "object": {
    "id": "https://example.com/hello-world",
    "type": "Note",
    "published": ""
    
  }
}
```