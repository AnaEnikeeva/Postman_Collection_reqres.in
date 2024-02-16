{
	"info": {
		"_postman_id": "d29eff68-90c4-4dfc-a4fc-6bf301228355",
		"name": "reqres.in",
		"schema": "https://schema.getpostman.com/json/collection/v2.1.0/collection.json",
		"_exporter_id": "30738846",
		"_collection_link": "https://crimson-rocket-925625.postman.co/workspace/New-Team-Workspace~207b96fd-7277-490d-a036-1554eca73048/collection/30738846-d29eff68-90c4-4dfc-a4fc-6bf301228355?action=share&source=collection_link&creator=30738846"
	},
	"item": [
		{
			"name": "GET",
			"item": [
				{
					"name": "List Users",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "{{url}}/api/users?page=2",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"users"
							],
							"query": [
								{
									"key": "page",
									"value": "2"
								}
							]
						}
					},
					"response": []
				},
				{
					"name": "Single User",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "{{url}}/api/users/2",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"users",
								"2"
							]
						}
					},
					"response": []
				},
				{
					"name": "Single User Not Found",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "{{url}}/api/users/23",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"users",
								"23"
							]
						}
					},
					"response": []
				},
				{
					"name": "List <Resource>",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "{{url}}/api/unknown",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"unknown"
							]
						}
					},
					"response": []
				},
				{
					"name": "Single <Resource>",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "{{url}}/api/unknown/2",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"unknown",
								"2"
							]
						}
					},
					"response": []
				},
				{
					"name": "Single <Resource> Not Found",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "{{url}}/api/unknown/23",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"unknown",
								"23"
							]
						}
					},
					"response": []
				},
				{
					"name": "Delayed REsponse",
					"request": {
						"method": "GET",
						"header": [],
						"url": {
							"raw": "{{url}}/api/users?dekay=3",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"users"
							],
							"query": [
								{
									"key": "dekay",
									"value": "3"
								}
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "POST",
			"item": [
				{
					"name": "Create",
					"request": {
						"method": "POST",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"name\": \"morpheus\",\r\n    \"job\": \"leader\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "{{url}}/api/users",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"users"
							]
						}
					},
					"response": []
				},
				{
					"name": "Register-Successful",
					"request": {
						"method": "POST",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"email\": \"eve.holt@reqres.in\",\r\n    \"password\": \"pistol\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "{{url}}/api/register",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"register"
							]
						}
					},
					"response": []
				},
				{
					"name": "Registeer-Unsuccessful",
					"request": {
						"method": "POST",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"email\": \"sydney@fife\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "{{url}}/api/register",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"register"
							]
						}
					},
					"response": []
				},
				{
					"name": "Login-Successful",
					"request": {
						"method": "POST",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"email\": \"eve.holt@reqres.in\",\r\n    \"password\": \"cityslicka\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "{{url}}/api/login",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"login"
							]
						}
					},
					"response": []
				},
				{
					"name": "Login-Unsuccessful",
					"request": {
						"method": "POST",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"email\": \"peter@klaven\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "{{url}}/api/login",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"login"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "PUT",
			"item": [
				{
					"name": "Update",
					"request": {
						"method": "PUT",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"name\": \"morpheus\",\r\n    \"job\": \"zion resident\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "{{url}}/api/users/2",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"users",
								"2"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "PATCH",
			"item": [
				{
					"name": "Update",
					"request": {
						"method": "PATCH",
						"header": [],
						"body": {
							"mode": "raw",
							"raw": "{\r\n    \"name\": \"morpheus\",\r\n    \"job\": \"zion resident\"\r\n}",
							"options": {
								"raw": {
									"language": "json"
								}
							}
						},
						"url": {
							"raw": "{{url}}/api/users/2",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"users",
								"2"
							]
						}
					},
					"response": []
				}
			]
		},
		{
			"name": "DELETE",
			"item": [
				{
					"name": "Delete",
					"request": {
						"method": "DELETE",
						"header": [],
						"url": {
							"raw": "{{url}}/api/users/2",
							"host": [
								"{{url}}"
							],
							"path": [
								"api",
								"users",
								"2"
							]
						}
					},
					"response": []
				}
			]
		}
	],
	"event": [
		{
			"listen": "prerequest",
			"script": {
				"type": "text/javascript",
				"exec": [
					""
				]
			}
		},
		{
			"listen": "test",
			"script": {
				"type": "text/javascript",
				"exec": [
					""
				]
			}
		}
	],
	"variable": [
		{
			"key": "url",
			"value": "",
			"type": "string"
		}
	]
}