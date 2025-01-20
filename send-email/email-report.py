#!/usr/bin/env python3

from email.message import EmailMessage
from credentials import smtpuser, smtppassword
import os.path
import mimetypes
import smtplib
import getpass

message = EmailMessage()
sender = "danielnichols1984@gmail.com"
recipient = "dnichols@camperdown.org"

message['From'] = sender
message['To'] = recipient
message['Subject'] = 'Greetings from {} to {}!'.format(sender, recipient)

body = """Hey there!

I'm learning to send emails using Python!"""
message.set_content(body)

attachment_path = "report.pdf"
attachment_filename = os.path.basename(attachment_path)
mime_type, _ = mimetypes.guess_type(attachment_path)
mime_type, mime_subtype = mime_type.split('/', 1)

with open(attachment_path, 'rb') as ap:
  message.add_attachment(ap.read(),
    maintype=mime_type,
    subtype=mime_subtype,
    filename=os.path.basename(attachment_path))

mail_server = smtplib.SMTP('smtp.gmail.com', 587)
mail_server.set_debuglevel(1)
mail_server.starttls()
mail_server.login(smtpuser, smtppassword)
mail_server.send_message(message)
mail_server.quit()
