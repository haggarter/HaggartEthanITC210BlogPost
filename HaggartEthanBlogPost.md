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
Since PHP runs on the Server _only_, it is difficult to create something called state. State is like a cross-section of a program while it is running. It represents the current parts of the program and the information available at a given time. It is easy to have state with something like JavaScript that is running in the client. PHP runs on the server, though, so all the communication comes through HTML requests and responses. The client cannot access anything when the server is running, and the server cannot respond to anything on the client unless asked.

State is very, very useful when web programming. One great example of state is authentication. When someone logs in to a website, that login should remain valid for each new page served by the server. The client should not have to put in credentials every time a new page is accessed. If the client needs to request information specific to the logged-in user, it should be able to do so with no problem. With a defined state, the client and server can pass information back and forth to make this process seamless. Without state, PHP is not very useful.

### The Solution
The solution is quite simple. It is, just pass the information back and forth! This passing of information works through something called sessions. A PHP session is just a temporary file created on the server that holds information about a specific client. It contains session variables that can be accessed across all other files. It has a timeout value, and while it has not yet expired it will be valid.

#### How are sessions made?
This guide will get to that part in detail later, but it is worth a quick explanation now. PHP initiates the session, creating a temporary session file. The server passes a unique identifier back to the client in the form of a cookie. Whenever the client connects to the server, the cookie is passed, too. It tells the server which session to use based on the identifier provided by the cookie.

Now there is state! The server knows who the client is and can hold information about the client. Things like authentication, updating pages, and other interactive features are now possible with a PHP session.

Let's get down to business and walk through some examples.

## 