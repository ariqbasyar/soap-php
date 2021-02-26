#!/usr/bin/env python2

from zeep import Client
soap_client = Client(
    'https://www.dataaccess.com/webservicesserver/NumberConversion.wso?wsdl',
)
# print dir(soap_client.service)
result = soap_client.service.NumberToWords(21)

print "result:", result
