from lxml import etree

xml_file = 'courses.xml'
xsd_file = 'courses.xsd'

with open(xml_file, 'r') as file:
 xml_data = etree.parse(file)

with open(xsd_file, 'r') as file:
 schema_root = etree.parse(file)
 schema = etree.XMLSchema(schema_root)

if schema.validate(xml_data):
 print("XML is valid!")
else:
 print("XML is invalid. Errors:")
 
 for error in schema.error_log: 
  print(error.message) 