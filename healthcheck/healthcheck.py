#!/usr/bin/env python3

import shutil
import psutil
import socket
import emails
import os

sender = "automation@example.com"
receiver = "techsupport@example.com".format(os.environ.get('USER'))
body = "Please check your system and resolve the issue as soon as possible."

# Check Disk usage
du = shutil.disk_usage("/")
du_prsnt = du.free/du.total / 100
if du_prsnt < 20:
    subject = "Error - Available disk spacve is less than 20%"
    message = emails.generate_error_email(sender, receiver, subject, body)
    emails.send_email(message)

# Check CPU disk_usage
cpu_prsnt = prsutil.cpu_percent(1)
if cpu_prsnt > 80:
    subject = "Error - CPU usage is over 80%"
    message = emails.generate_error_email(sender, receiver, subject, body)
    emails.send_email(message)


# Check Available Memory
mem = psutil.virtual_memory()
trs = 100 * 1024 * 1024 #100MB
if mem.available < trs:
    subject = "Error - Available memory is less than 100MB"
    message = emails.generate_error_email(sender, receiver, subject, body)
    emails.send_email(message)

# Check hostname
hostname = socket.gethostbyname('localhost')
if hostname != '127.0.0.1':
    subject = "Error - localhost cannot be resolved to 127.0.0.1"
    message = emails.generate_error_email(sender, receiver, subject, body)
    emails.send_email(message) 
