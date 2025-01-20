# portfolio
Welcome to my project collection! Here, you'll find a curated showcase of my skills and expertise in the technology field.


Python Script: image-scripts/image-correct.py
Python Script: Batch Editing and Reformatting Image Files

This Python script automates the process of batch editing and reformatting image files stored in a specific directory. It is designed for tasks like rotating, resizing, and converting image formats, demonstrating practical automation skills with Python.

Script Breakdown:

    Image Directory Management
        The script specifies a directory containing the input images (images/) and iterates over all files using the os.listdir() function.
        Each file is combined with its full path using os.path.join() to ensure compatibility across operating systems.

    Image Processing with Pillow (PIL)
        The script uses the Pillow library, a powerful tool for image manipulation in Python.
        Each image is processed with the following transformations:
            Rotation: Images are rotated by 90 degrees.
            Resizing: Rescaled to a uniform size of 128x128 pixels for consistency.
            Format Conversion: Converted to the RGB color model to ensure compatibility with JPEG format.

    Output File Management
        Processed images are saved in a designated output directory (reformatted-icons/).
        File names are preserved but stripped of extensions before appending the .jpg suffix.

    Error Handling
        A try-except block is implemented to gracefully handle potential issues, such as unsupported file types or corrupted images.
        Errors are logged to the console with a message identifying the skipped file, ensuring the script remains robust and user-friendly.

Use Cases:
This script can be adapted for a variety of real-world applications, such as:

    Preparing images for web applications or thumbnail galleries.
    Converting legacy image files to modern formats.
    Standardizing image dimensions for machine learning datasets.

Key Features Demonstrated:

    Automation: Streamlines repetitive image processing tasks.
    Error Resilience: Catches and logs errors without interrupting execution.
    Scalability: Easily adaptable for processing larger datasets or integrating additional transformations.
    Cross-Platform Compatibility: Uses platform-agnostic file path handling with os.path.join().

Summary:
This script highlights proficiency in Python automation, practical use of the Pillow library, and handling common challenges in file and image processing workflows. It serves as a robust and extensible solution for managing image files efficiently.




Python Script: pdf-report/create-pdf.py
Generating a PDF Report with ReportLab

This Python script demonstrates the creation of a dynamic PDF report using the powerful ReportLab library. The script showcases skills in data processing, visualization, and PDF generation, making it an ideal addition to any automation or data-reporting workflow.

Key Features:

    Title Creation
        The script uses the Paragraph class to define a title: "A Complete Inventory of My Fruit".
        The getSampleStyleSheet() method provides pre-defined styles for consistent formatting.

    Data Tabulation
        A dictionary of fruits and their respective quantities serves as the data source.
        The Table class is employed to neatly format and display this data as a grid in the PDF.
        Custom table styles, such as gridlines, are added for better readability.

    Pie Chart Visualization
        A pie chart is generated using the Pie class from reportlab.graphics.charts.piecharts.
        Fruit names are used as labels, and their respective quantities are plotted as data points.
        The chart is embedded into the PDF using the Drawing class.

    PDF Assembly
        The SimpleDocTemplate is used to structure the PDF layout.
        The report is built in stages, incorporating the title, data table, and pie chart into the final document.

Purpose and Use Case:
This script can be adapted for various reporting tasks, such as inventory management, data summaries, or visualizations in professional and personal projects. It demonstrates proficiency in:

    Automating repetitive tasks with Python
    Leveraging libraries for professional-quality outputs
    Visualizing data effectively

Sample Output Components:

    A descriptive title
    A structured table of inventory data
    A visually appealing pie chart to summarize quantities

This script is an excellent example of combining Python's capabilities for both backend processing and polished, client-ready document creation.





Python Script: pdf-report/create-pdf.py
Sending Emails with Attachments

This Python script demonstrates how to send emails with attachments using the smtplib and email modules. It serves as a practical example of automating email communication, complete with a file attachment (e.g., a PDF report).
Key Features:

    Dynamic Email Composition
        The sender and recipient are dynamically defined in the script.
        Includes a customizable subject and message body.

    File Attachment
        The script supports file attachments using the mimetypes module to determine the file’s MIME type.
        The attachment (report.pdf in this case) is added seamlessly to the email.

    Secure Email Transmission
        Uses the SMTP protocol with TLS encryption for secure communication.
        The smtplib.SMTP.starttls() method ensures the connection is encrypted.

    Error Prevention
        SMTP credentials (smtpuser and smtppassword) are imported from a separate credentials.py file.
        This keeps sensitive information out of the main script, demonstrating good security practices.

Important Notes for Reviewers:

This Script Will Not Function Without Proper SMTP Credentials:

    The smtpuser and smtppassword variables are placeholders and must be replaced with valid credentials in the credentials.py file.
    To ensure security, the actual credentials are not included in this repository. Reviewers will need to create their own credentials.py file with the following format:

    smtpuser = "your_email@example.com"
    smtppassword = "your_password"

Do Not Use Hardcoded Credentials:

    Instead of hardcoding sensitive information, the script can be modified to prompt for credentials at runtime using the getpass module. For example:

    smtpuser = input("Enter your SMTP username: ")
    smtppassword = getpass.getpass("Enter your SMTP password: ")

Usage Instructions:

    Create a credentials.py file with your SMTP username and password.
    Place a file named report.pdf in the script's directory or update the attachment_path variable to point to your desired attachment.
    Run the script:

    python email-report.py

Summary:

This script is a secure and practical demonstration of automating email communication in Python. By separating sensitive credentials and employing TLS encryption, it highlights both functionality and adherence to security best practices.




Python Script: chatbot/chatbot.py
Python Script: Chat Application Using OpenAI's GPT-3.5

This script demonstrates a simple, interactive chatbot application using OpenAI's ChatGPT (GPT-3.5-turbo) model. It showcases your ability to work with AI-driven APIs and integrate them into real-world applications.
Key Features:

    Dynamic User Interaction
        The script continuously takes user input in a conversational loop.
        It supports exit commands like "quit," "exit," or "bye" to terminate the session.

    Integration with OpenAI API
        The openai.ChatCompletion.create() method is used to send a prompt to the GPT model and retrieve the AI-generated response.

    Efficient and Simple Design
        The script is minimalistic and focused, making it easy to understand and extend for further applications, such as virtual assistants, customer service bots, or educational tools.

Important Notes for Reviewers:

    API Key Required
        The script relies on an OpenAI API key to function. The openai.api_key variable must be set with a valid API key.
        For security reasons, the API key is not included in this repository. Reviewers can insert their key manually:

        openai.api_key = "your_openai_api_key"

    Usage Costs
        Keep in mind that using OpenAI's API may incur costs based on usage. For more information, refer to OpenAI's pricing.

Usage Instructions:

    Obtain an OpenAI API key by creating an account on OpenAI's platform.
    Replace the openai.api_key variable in the script with your API key.
    Run the script:

    python chat_with_gpt.py

    Enter your prompts to interact with the chatbot. Type "quit," "exit," or "bye" to end the session.

Potential Applications:

    Virtual Assistants: This script serves as a foundation for building advanced virtual assistants.
    Customer Support: Can be extended to handle FAQs and common support queries.
    Educational Tools: Enables interactive learning experiences by providing real-time responses to questions.

Summary:

This project is a simple yet powerful demonstration of leveraging AI for conversational applications. It reflects your understanding of API integration, user interaction design, and the potential of AI technologies.



Python Script: image-scripts/upload-images.py
Image Upload Script
Overview

This Python script demonstrates how to programmatically upload image files to a website using a RESTful API. It leverages the requests module to handle HTTP POST requests and automates the process of iterating through a directory of image files for upload.
Key Features

    Directory Traversal
        The script scans a specified directory (reformatted-icons) for image files with the .jpeg extension.

    RESTful API Integration
        Each image is uploaded to a web server via a POST request to a specified endpoint (http://localhost/upload/).
        Demonstrates proficiency in interacting with APIs using the Python requests module.

    Error Handling
        A try-except block is implemented to catch and handle errors during the upload process, ensuring the script remains robust.

Usage Instructions

    Prerequisites
        Ensure the web server is running locally and configured to accept file uploads at the specified endpoint (http://localhost/upload/).
        Install the required Python libraries:

    pip install requests pillow

Setup

    Place the .jpeg images to be uploaded in the reformatted-icons directory.
    Update the url variable in the script if using a different server or endpoint.

Run the Script
Execute the script:

    python upload_images.py

        The script will scan the reformatted-icons directory and upload all .jpeg images to the server.

How It Works

    Directory Scanning
        The script uses the os module to list all files in the reformatted-icons directory.
        Files ending with the .jpeg extension are selected for upload.

    File Upload
        Each image is opened in binary mode and sent to the server using a POST request with the requests.post() method.
        The files parameter is used to attach the image file to the request.

    Error Handling
        Errors encountered during the upload process (e.g., connectivity issues or server errors) are caught and logged to the console for review.

Important Notes

    RESTful Framework Compatibility
        The script assumes the server is configured to accept file uploads at the specified endpoint. Update the url variable to match your server’s endpoint.

    Error Logging
        For better debugging, consider extending the script to log detailed error messages (e.g., HTTP status codes).

    File Type Restrictions
        The script currently processes only .jpeg files. Modify the condition in the if statement to include additional file types if needed.

Potential Applications

    Automating the upload of assets to a content management system (CMS).
    Streamlining workflows that require bulk image uploads.
    Testing RESTful APIs for file handling.






Python Script: healthcheck/healthcheck.py
System Health Check Script
Overview

This Python script performs a series of automated health checks on a system, including monitoring disk space, CPU usage, available memory, and hostname resolution. It is designed to send email alerts for any detected issues, helping administrators promptly address potential problems.
    Key Features

        Disk Usage Monitoring
            The script checks if the available disk space falls below 20%.

        CPU Usage Monitoring
            Alerts if CPU usage exceeds 80% over a 1-second interval.

        Memory Availability Check
            Sends a notification if available memory drops below 100MB.

        Hostname Resolution
            Verifies if the hostname (localhost) resolves to 127.0.0.1.

        Automated Email Alerts
            Uses a custom emails module to generate and send error notifications to a specified recipient.

    Usage Instructions

        Prerequisites
            Ensure the following Python libraries are installed:

        pip install psutil

        Set up the custom emails module to handle email generation and sending. It should include:
            A generate_error_email() function for creating error messages.
            A send_email() function for sending emails via an SMTP server.

    Setup

        Update the sender and receiver variables with appropriate email addresses.
        Ensure the receiver is dynamically populated using the system's environment variable (os.environ.get('USER')).

    Run the Script
    Execute the script to perform the health checks:

        python healthcheck.py

    How It Works

        Disk Usage Monitoring
            The shutil.disk_usage() function calculates the available disk space. If less than 20%, an email alert is triggered.

        CPU Usage Monitoring
            The psutil.cpu_percent(1) method measures CPU usage over a 1-second interval. If usage exceeds 80%, an alert is sent.

        Memory Check
            The psutil.virtual_memory() function monitors available memory. If it drops below 100MB, an alert is triggered.

        Hostname Resolution
            The socket.gethostbyname('localhost') function verifies the resolution of localhost. Any deviation from 127.0.0.1 results in an alert.

        Email Alerts
            For each issue detected, an email is generated and sent using the custom emails module.

    Important Notes

        Custom emails Module
            The script depends on a custom emails module for generating and sending email notifications. Ensure this module is implemented and accessible to the script.

        Environment Variable
            The receiver email address dynamically incorporates the system user from the USER environment variable.

        Thresholds
            Adjust thresholds for disk space, CPU usage, and memory availability to fit specific requirements.

    Potential Applications

        System Monitoring: Automates health checks for servers and workstations.
        Proactive Maintenance: Notifies administrators of potential issues before they cause system failures.
        Scalability: Can be extended to include additional health checks or integrate with monitoring tools.



Python Project: json-upload/json-post-1
JSON Data Upload Script
Overview

This Python script processes feedback data stored in text files and uploads it to a remote server in JSON format. It demonstrates proficiency in file handling, data extraction, and interacting with a RESTful API using the requests module.
        Key Features

            Reading Data from Text Files
                The script scans a specified directory for .txt files and extracts content from each file, expecting a specific format for feedback data.

            Data Formatting
                It formats the date in each feedback file to a standardized format (if the date is valid). Non-valid dates are left unchanged.
                The extracted content is structured into a JSON object before being posted.

            API Integration
                The script sends the formatted feedback data as a JSON payload to a server using a POST request.

            Error Handling
                For each file, the script checks the server’s response status. If the upload is successful, a success message is printed; otherwise, an error message is displayed.

        Usage Instructions

            Prerequisites
                Install the required Python library:

            pip install requests

        Setup

            Place the .txt files containing feedback data in the descriptions directory.
            The expected format of each .txt file is as follows:
                Line 1: Title
                Line 2: Name
                Line 3: Date (in YYYY-MM-DD format)
                Line 4 and onwards: Feedback comments

        Run the Script
        Execute the script to process and upload the feedback data:

            python json-post-1.py

                The script will upload the feedback data as JSON to the specified server.

        How It Works

            File Scanning and Data Extraction
                The script scans the descriptions directory for .txt files. For each file, it reads the first few lines and extracts relevant data: title, name, date, and feedback comments.

            Date Formatting
                The date string in the file is converted to a datetime object. If the date is in the correct format (YYYY-MM-DD), it is formatted and added to the JSON data. If not, the date is left as-is.

            JSON Data Creation
                The script creates a JSON object with the extracted information:

                {
                  "title": "Title of Feedback",
                  "name": "Name of User",
                  "date": "Formatted Date",
                  "feedback": "Feedback content"
                }

            POST Request
                The formatted JSON data is sent to the specified URL via an HTTP POST request using the requests.post() method.
                The server’s response status is checked, and feedback success or failure is logged to the console.

        Important Notes

            Server URL
                Ensure the URL (http://34.145.58.248/feedback/) is accessible and configured to accept the posted data. Update the url variable as needed.

            File Format
                This script expects .txt files with a specific structure. If your files differ, you may need to adjust the parsing logic.

            Date Handling
                The script assumes the date is in YYYY-MM-DD format. If other date formats are used, they may need to be handled separately.

        Potential Applications

            Feedback Collection: Automate the process of gathering and uploading user feedback to a server for analysis.
            Data Integration: Integrate with a backend system to store and manage feedback data.
            Batch Data Upload: Ideal for batch processing of large sets of text-based data and sending them to a server.



Python Project: windows-scripts/error-logs.py
Windows Event Log Error Retrieval Script
Overview

This Python script retrieves error events from a specified Windows Event Log, such as the "Application" log, using the win32evtlog module. It filters the events to display only those of the type EVENTLOG_ERROR_TYPE, providing useful information for system monitoring and troubleshooting.
          Key Features

              Event Log Retrieval
                  The script can fetch logs from any Windows Event Log, with "Application" being the default.

              Error Filtering
                  It filters out events that are of type ERROR, allowing you to focus on system issues.

              Customizable Parameters
                  You can specify the log type, the server to connect to, and the number of hours to go back when fetching the logs.

              Structured Output
                  The script prints relevant details for each error, including:
                      Source of the error
                      Event ID
                      Error message

          Usage Instructions

              Prerequisites
                  Ensure that the pywin32 library is installed:

              pip install pywin32

          Run the Script

              Execute the script to retrieve error logs from the "Application" event log (default):

                  python error-logs.py

                  You can modify the log_type, server, and hours_ago parameters if you need logs from different event logs or specific time ranges.

          How It Works

              Open Event Log
                  The script opens the specified event log (default is "Application") on the local server (or a specified remote server, if provided).

              Read Events
                  It reads events from the log using win32evtlog.ReadEventLog() with flags set for backwards reading and sequential reading.

              Filter Error Events
                  The script checks each event's EventType. If it’s an error (win32evtlog.EVENTLOG_ERROR_TYPE), it adds it to the list of errors.

              Event Data
                  For each error, the script prints:
                      Source: The application or system component that logged the event.
                      Event ID: The unique identifier for the event.
                      Message: Any error message associated with the event.

          Important Notes

              Permissions
                  The script requires appropriate permissions to access event logs on the system. If running remotely, ensure the necessary credentials are provided.

              Custom Parameters
                  You can change the log_type to check other logs, such as:
                      Security
                      System
                  Set server to specify a remote machine and provide credentials if needed.
                  Use hours_ago to adjust how far back you want to fetch error logs.

              Handling Multiple Event Logs
                  If you want to check multiple logs or make adjustments, modify the get_errors_from_event_log() function accordingly.

          Potential Applications

              System Monitoring: Use this script for automated system health checks by monitoring error events.
              Troubleshooting: Quickly retrieve and review critical error logs for diagnostic purposes.
              Logging Automation: Collect and analyze logs on a regular basis for proactive system maintenance.



Python Project: windows-scripts/get_recent_logins.py
Windows Event Log - Recent Logins Script
Overview

This Python script retrieves recent successful login events from the Windows Security Event Log using the win32evtlog module. It filters for event ID 4624, which represents successful logon events, and displays the user name and login time for each event. The script is useful for monitoring recent login activity on a machine, which can aid in system auditing and security checks.
Key Features

    Recent Logins Retrieval
        The script fetches successful login events from the Security Event Log, specifically looking for event ID 4624.

    Customizable Time Range
        The script can be configured to check for logins within a specific time frame (default: last 5 days).

    Event Details
        For each login event, the script extracts and displays:
            Username of the user who logged in
            Time of the login

    System Compatibility
        The script works on local or remote Windows machines (by adjusting the server variable).

Usage Instructions

    Prerequisites
        Install the pywin32 library:

    pip install pywin32

Run the Script
To retrieve and display recent successful logins (within the default 5 days), run the script:

    python get_recent_logins.py

        You can adjust the days parameter to specify a different time frame.

How It Works

    Open Event Log
        The script opens the Windows "Security" event log (or another specified log) using win32evtlog.OpenEventLog().

    Time Filtering
        It filters events based on the time range specified by the days parameter. It retrieves log entries generated within the last days days.

    Event ID Filtering
        The script looks for event ID 4624, which indicates a successful logon event. The username and login time are extracted from each matching event.

    Output
        The script prints the username and login time for each successful login within the specified time range.

Important Notes

    Permissions
        The script requires appropriate permissions to read the event logs on the local machine or remote machine. Ensure the script is run with administrative privileges if necessary.

    Server Configuration
        By default, the script checks the local machine's event log. To check logs on a remote machine, change the server variable to the remote machine's hostname or IP address.

    Event ID and Log Name
        The script specifically filters for event ID 4624 (successful logon events) in the "Security" log. If you need to track different event types, modify the event ID and log name as required.

Potential Applications

    Security Auditing: Monitor and track who is logging into a system and when, helping to identify unauthorized access.
    System Monitoring: Automate the process of gathering login data to monitor user activity on a machine.
    Incident Investigation: Use this data to investigate suspicious activity by looking at login times and users.
