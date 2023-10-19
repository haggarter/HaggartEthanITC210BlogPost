# The Ins and Outs of PHP Sesions
With Ethan Haggart

## Introduction

### What is PHP?
PHP is an interpreted programming language used primarily in web development. It is run entirely on the web server, and only the resulting HTML is passed back to the client to be displayed. This means that unlike languages like JavaScript, the client has no access to PHP code.

#### Wait. Client? Server? What?
Websites consist of many moving parts that work together to create the user experience many people are used to. When someone opens Google Chrome, Safari, or any browser they are opening a profgram that is running on their machine. That program can do things like display web pages, search the internet, and run JavaScript, a programming language. A browser does not hold all of the websites on the internet, though (that would be a pretty massive local database). Instead, the browser relies on being "served" websites from other places on the internet, known as servers.

A server's only job is to receive and fulfill requests. A client connects from the client's browser, sending a request to the server. The server then has to figure out what the client is requesting and send that information back to the client. 
