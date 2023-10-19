# The Ins and Outs of PHP Sesions
With Ethan Haggart

## Introduction

### What _is_ PHP?
PHP is an interpreted programming language used primarily in web development. It is run entirely on the web server, and only the resulting HTML is passed back to the client to be displayed. This means that unlike languages like JavaScript, the client has no access to PHP code.

#### Wait. Client? Server? What?
Websites consist of many moving parts that work together to create the user experience many people are used to. When someone opens Google Chrome, Safari, or any browser they are opening a profgram that is running on their machine. That program can do things like display web pages, search the internet, and run JavaScript, a programming language. A browser does not hold all of the websites on the internet, though (that would be a pretty massive local database). Instead, the browser relies on being "served" websites from other places on the internet, known as servers.

A server's only job is to receive and fulfill requests. A client connects from the client's browser, sending a request to the server. The server then has to figure out what the client is requesting and send that information back to the client. It gets the right files and sends them back so the server can display them to the user. That is what happens when someone accesses a website on the internet. A client asked a server for information, and the server sent that information back across the internet.

#### And how does that apply to PHP?
PHP runs on the server. That means it finishes executing long before the client receives the webpage. By then, all calculations have been done. All variables have been used. There is nothing left for the client to do except to display the page. It is useful for keeping internal systems secret from the client so that the client does not have access to internal information, and for accessing things like databases in a safe way.

### The Problem
