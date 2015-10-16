Feature: Market users
  In order to use the API
  As a API Client
  I need to be able to get users resource API

Scenario: Getting a single user by id
  Given I prepare a GET request on "/api/users"
  When I send the request
  Then I should receive a 200 response
