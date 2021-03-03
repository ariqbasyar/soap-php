#!/usr/bin/env python2

import SOAPpy
server = SOAPpy.SOAPProxy("http://localhost:8080/")
# print dir(server)
print server.greet("Muhammad Ariq Basyar")
