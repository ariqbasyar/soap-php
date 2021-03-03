#!/usr/bin/env python2

import SOAPpy

def greet(name):
    return "Hello " + name

server = SOAPpy.SOAPServer(("localhost", 8080))
server.registerFunction(greet)
server.serve_forever()
