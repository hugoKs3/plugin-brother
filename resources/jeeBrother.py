import asyncio
from sys import argv

from brother import Brother, SnmpError, UnsupportedModel

import asyncio
import logging
from sys import argv

import pysnmp.hlapi.asyncio as hlapi

from brother import Brother, SnmpError, UnsupportedModel
from datetime import date, datetime

import json

class DateTimeEncoder(json.JSONEncoder):
    def default(self, o):
        if isinstance(o, datetime):
            return o.isoformat()

        return json.JSONEncoder.default(self, o)


async def main():
    host = argv[1]
    kind = argv[2]
    mypath = argv[3]
    mylog = argv[4]

    if mylog == "debug":
        logging.basicConfig(level=logging.DEBUG)
    elif mylog == "info":
        logging.basicConfig(level=logging.INFO)
    elif mylog == "error":
        logging.basicConfig(level=logging.ERROR)
    elif mylog == "warning":
        logging.basicConfig(level=logging.WARNING)
    else:
        logging.basicConfig(level=logging.INFO)

    brother = Brother(host, kind=kind)

    try:
        data = await brother.async_update()
    except (ConnectionError, SnmpError, UnsupportedModel) as error:
        logging.error(f"{error}")
        return

    brother.shutdown()

    if data:
        myfile = open(mypath + "/data/output.json", "w")
        json.dump(data, myfile, cls=DateTimeEncoder)
        myfile.close()

loop = asyncio.get_event_loop()
loop.run_until_complete(main())

