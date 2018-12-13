<?php

$questions = array();

$answers = array();

for ($x = 0; $x < 100; $x++) {
    $answers[$x] = array();
}

$correct = hash('ripemd160', 'correct');
$incorrect1 = hash('ripemd160', 'incorrect1');
$incorrect2 = hash('ripemd160', 'incorrect2');
$incorrect3 = hash('ripemd160', 'incorrect3');

$questions[0] = 'What is the supreme law of the land?';
$answers[0][$correct] = 'the Constitution';
$answers[0][$incorrect1] = 'the Bill of Rights';
$answers[0][$incorrect2] = 'the Declaration of Independence';
$answers[0][$incorrect3] = 'the Ten Commandments';

$questions[1] = 'What does the Constitution do?';
$answers[1][$correct] = 'all of these';
$answers[1][$incorrect1] = 'sets up the government';
$answers[1][$incorrect2] = 'defines the government';
$answers[1][$incorrect3] = 'protects basic rights of Americans';

$questions[2] = 'The idea of self-government is in the first three words of the Constitution. What are these words?';
$answers[2][$correct] = 'We the People';
$answers[2][$incorrect1] = 'Four Score and…';
$answers[2][$incorrect2] = 'I Pledge Allegiance';
$answers[2][$incorrect3] = 'The United States';

$questions[3] = 'What is an amendment?';
$answers[3][$correct] = 'all of these';
$answers[3][$incorrect1] = 'an addition (to the Constitution)';
$answers[3][$incorrect2] = 'a delete(to the Constitution)';
$answers[3][$incorrect3] = 'a change (to the Constitution)';

$questions[4] = 'What do we call the first ten amendments to the Constitution?';
$answers[4][$correct] = 'the Bill of Rights';
$answers[4][$incorrect1] = 'the Miranda Rights';
$answers[4][$incorrect2] = 'the Preamble';
$answers[4][$incorrect3] = 'the Magna Carta';

$questions[5] = 'What is one right or freedom from the First Amendment?';
$answers[5][$correct] = 'speech';
$answers[5][$incorrect1] = 'own land';
$answers[5][$incorrect2] = 'fight';
$answers[5][$incorrect3] = 'party';

$questions[6] = 'How many amendments does the Constitution have?';
$answers[6][$correct] = 'twenty-seven (27)';
$answers[6][$incorrect1] = 'twenty-eight(28)';
$answers[6][$incorrect2] = 'twenty-six(26)';
$answers[6][$incorrect3] = 'thirty (30)';

$questions[7] = 'What did the Declaration of Independence do?';
$answers[7][$correct] = 'announced our independence (from Great Britain)';
$answers[7][$incorrect1] = 'regulated tax on tea';
$answers[7][$incorrect2] = 'ended slavery';
$answers[7][$incorrect3] = 'announced who the first President was';

$questions[8] = 'What are two rights in the Declaration of Independence?';
$answers[8][$correct] = 'life and liberty';
$answers[8][$incorrect1] = 'serve and protect';
$answers[8][$incorrect2] = 'right to bear arms and own land';
$answers[8][$incorrect3] = 'safety and citizenship';

$questions[9] = 'What is freedom of religion?';
$answers[9][$correct] = 'You can practice any religion, or not practice a religion.';
$answers[9][$incorrect1] = 'Churches can take whatever land they want';
$answers[9][$incorrect2] = 'Religious texts are free';
$answers[9][$incorrect3] = 'The church is above the government';

$questions[10] = 'What is the economic system in the United States?';
$answers[10][$correct] = 'capitalist economy';
$answers[10][$incorrect1] = 'feudal economy';
$answers[10][$incorrect2] = 'communist economy';
$answers[10][$incorrect3] = 'trade and barter economy';

$questions[11] = 'What is the “rule of law”?';
$answers[11][$correct] = 'No one is above the law.';
$answers[11][$incorrect1] = 'the Golden rule';
$answers[11][$incorrect2] = 'the President is exempt from following the law';
$answers[11][$incorrect3] = 'the military is in charge';

$questions[12] = 'Name one branch or part of the government.';
$answers[12][$correct] = 'Congress';
$answers[12][$incorrect1] = 'Parliament';
$answers[12][$incorrect2] = 'The United Nations';
$answers[12][$incorrect3] = 'Interpol';

$questions[13] = 'What stops one branch of government from becoming too powerful?';
$answers[13][$correct] = 'checks and balances';
$answers[13][$incorrect1] = 'the Supreme Court';
$answers[13][$incorrect2] = 'the People';
$answers[13][$incorrect3] = 'the church';

$questions[14] = 'Who is in charge of the executive branch?';
$answers[14][$correct] = 'thePresident';
$answers[14][$incorrect1] = 'the Pope';
$answers[14][$incorrect2] = 'the Speaker of the House';
$answers[14][$incorrect3] = 'the People';

$questions[15] = 'Who makes federal laws?';
$answers[15][$correct] = 'Congress';
$answers[15][$incorrect1] = 'the Supreme Court';
$answers[15][$incorrect2] = 'the President';
$answers[15][$incorrect3] = 'the People';

$questions[16] = 'What are the two parts of the U.S. Congress?';
$answers[16][$correct] = 'the Senate and House of Representatives';
$answers[16][$incorrect1] = 'President and Vice President';
$answers[16][$incorrect2] = 'the Cabinet and the Supreme Court';
$answers[16][$incorrect3] = 'the House of Commons and the military';

$questions[17] = 'How many U.S. Senators are there?';
$answers[17][$correct] = 'one hundred (100)';
$answers[17][$incorrect1] = 'two hundred (200)';
$answers[17][$incorrect2] = 'fifty (50)';
$answers[17][$incorrect3] = 'four hundred thirty-five (435)';

$questions[18] = 'We elect a U.S. Senator for how many years?';
$answers[18][$correct] = 'six (6)';
$answers[18][$incorrect1] = 'two (2)';
$answers[18][$incorrect2] = 'four (4)';
$answers[18][$incorrect3] = 'for life';

$questions[19] = 'Who is one of your state’s U.S. Senators now?';
$answers[19][$correct] = 'Tammy Duckworth';
$answers[19][$incorrect1] = 'Jessie White';
$answers[19][$incorrect2] = 'Rahm Emmanuel';
$answers[19][$incorrect3] = 'Paul Ryan';

$questions[20] = 'The House of Representatives has how many voting members?';
$answers[20][$correct] = 'four hundred thirty-five (435)';
$answers[20][$incorrect1] = 'two hundred (200)';
$answers[20][$incorrect2] = 'fifty (50)';
$answers[20][$incorrect3] = 'one hundred (100)';

$questions[21] = 'We elect a U.S. Representative for how many years?';
$answers[21][$correct] = 'two (2)';
$answers[21][$incorrect1] = 'four (4)';
$answers[21][$incorrect2] = 'six (6)';
$answers[21][$incorrect3] = 'for life';

$questions[22] = 'Name your U.S. Representative.';
$answers[22][$correct] = 'Jan Schakowsky';
$answers[22][$incorrect1] = 'Rahm Emmanuel';
$answers[22][$incorrect2] = 'Mitch McConnell';
$answers[22][$incorrect3] = 'Barack Obama';

$questions[23] = 'Who does a U.S. Senator represent?';
$answers[23][$correct] = 'the People';
$answers[23][$incorrect1] = 'the corporations';
$answers[23][$incorrect2] = 'lobbyists';
$answers[23][$incorrect3] = 'the President';

$questions[24] = 'Why do some states have more Representatives than other states?';
$answers[24][$correct] = '(because of) the state’s population';
$answers[24][$incorrect1] = '(because of) taxes';
$answers[24][$incorrect2] = '(because of) time zones';
$answers[24][$incorrect3] = '(because of) the Civil War';

$questions[25] = 'We elect a President for how many years?';
$answers[25][$correct] = 'four (4)';
$answers[25][$incorrect1] = 'two (2)';
$answers[25][$incorrect2] = 'six (6)';
$answers[25][$incorrect3] = 'for life';

$questions[26] = 'In what month do we vote for President?';
$answers[26][$correct] = 'November';
$answers[26][$incorrect1] = 'January';
$answers[26][$incorrect2] = 'March';
$answers[26][$incorrect3] = 'July';

$questions[27] = 'What is the name of the President of the United States now?';
$answers[27][$correct] = 'Donald Trump';
$answers[27][$incorrect1] = 'Mike Pence';
$answers[27][$incorrect2] = 'Mitch McConnell';
$answers[27][$incorrect3] = 'Barack Obama';

$questions[28] = 'What is the name of the Vice President of the United States now?';
$answers[28][$correct] = 'Mike Pence';
$answers[28][$incorrect1] = 'Mitch McConnell';
$answers[28][$incorrect2] = 'Paul Ryan';
$answers[28][$incorrect3] = 'Nancy Pelosi';

$questions[29] = 'If the President can no longer serve, who becomes President?';
$answers[29][$correct] = 'the Vice President';
$answers[29][$incorrect1] = 'the Speaker of the House';
$answers[29][$incorrect2] = 'the Senate Majority Leader';
$answers[29][$incorrect3] = 'the Chief Justice of the Supreme Court';

$questions[30] = 'If both the President and the Vice President can no longer serve, who becomes President?';
$answers[30][$correct] = 'the Speaker of the House';
$answers[30][$incorrect1] = 'another election is held';
$answers[30][$incorrect2] = 'the Secretary of State';
$answers[30][$incorrect3] = 'the Attorney General';

$questions[31] = 'Who is the Commander in Chief of the military?';
$answers[31][$correct] = 'the President';
$answers[31][$incorrect1] = 'the Secretary of Defense';
$answers[31][$incorrect2] = 'the Chairman of the Joint Chiefs of Staff';
$answers[31][$incorrect3] = 'the Secretary of State';

$questions[32] = 'Who signs bills to become laws?';
$answers[32][$correct] = 'the President';
$answers[32][$incorrect1] = 'the Vice President';
$answers[32][$incorrect2] = 'the Speaker of the House';
$answers[32][$incorrect3] = 'the Senate Majority Leader';

$questions[33] = 'Who vetoes bills?';
$answers[33][$correct] = 'the President';
$answers[33][$incorrect1] = 'Congress';
$answers[33][$incorrect2] = 'the Speaker of the House';
$answers[33][$incorrect3] = 'the Supreme Court';

$questions[34] = 'What does the President’s Cabinet do?';
$answers[34][$correct] = 'advises the President';
$answers[34][$incorrect1] = 'makes decisions for the President';
$answers[34][$incorrect2] = 'holds the President’s personal items';
$answers[34][$incorrect3] = 'investigates the President';

$questions[35] = 'What are two Cabinet-level positions?';
$answers[35][$correct] = 'Secretary of Education and Attorney General ';
$answers[35][$incorrect1] = 'Secretary of Defense and the Speaker of the House';
$answers[35][$incorrect2] = 'Chief of Staff and Surgeon General';
$answers[35][$incorrect3] = 'Secretary of State and Senate Majority Leader';

$questions[36] = 'What does the judicial branch do?';
$answers[36][$correct] = 'reviews laws';
$answers[36][$incorrect1] = 'declares war';
$answers[36][$incorrect2] = 'creates laws';
$answers[36][$incorrect3] = 'appoints Supreme Court justices';

$questions[37] = 'What is the highest court in the United States?';
$answers[37][$correct] = 'the Supreme Court';
$answers[37][$incorrect1] = 'family court';
$answers[37][$incorrect2] = 'the People’s Court';
$answers[37][$incorrect3] = 'the Court of Public Opinion';

$questions[38] = 'How many justices are on the Supreme Court?';
$answers[38][$correct] = 'nine (9)';
$answers[38][$incorrect1] = 'seven (7)';
$answers[38][$incorrect2] = 'eleven (11)';
$answers[38][$incorrect3] = 'ten (10)';

$questions[39] = 'Who is the Chief Justice of the United States now?';
$answers[39][$correct] = 'John Roberts';
$answers[39][$incorrect1] = 'Ruth Bader Ginsburg';
$answers[39][$incorrect2] = 'Joseph Smith';
$answers[39][$incorrect3] = 'Merrick Garland';

$questions[40] = 'Under our Constitution, some powers belong to the federal government. What is one power of the federal government?';
$answers[40][$correct] = 'all of these';
$answers[40][$incorrect1] = 'to print money';
$answers[40][$incorrect2] = 'to create an army';
$answers[40][$incorrect3] = 'to declare war';

$questions[41] = 'Under our Constitution, some powers belong to the federal government. What is one power of the federal government?';
$answers[41][$correct] = 'all of these';
$answers[41][$incorrect1] = 'provide schooling and education';
$answers[41][$incorrect2] = 'give a driver\'s license';
$answers[41][$incorrect3] = 'approving zoning and land use';

$questions[42] = 'Who is the Governor of your state now?';
$answers[42][$correct] = 'Bruce Rauner';
$answers[42][$incorrect1] = 'J.B. Pritzker';
$answers[42][$incorrect2] = 'Rahm Emmanuel';
$answers[42][$incorrect3] = 'Michael Madigan';

$questions[43] = 'What is the capital of your state?';
$answers[43][$correct] = 'Springfield';
$answers[43][$incorrect1] = 'Chicago';
$answers[43][$incorrect2] = 'Peoria';
$answers[43][$incorrect3] = 'Champaign';

$questions[44] = 'What are the two major political parties in the United States?';
$answers[44][$correct] = 'Democratic and Republican';
$answers[44][$incorrect1] = 'Whigs and Tories';
$answers[44][$incorrect2] = 'Labor and Conservatives';
$answers[44][$incorrect3] = 'Liberal Democrats and Green';

$questions[45] = 'What is the political party of the President now?';
$answers[45][$correct] = 'Republican ';
$answers[45][$incorrect1] = 'Democratic';
$answers[45][$incorrect2] = 'Green';
$answers[45][$incorrect3] = 'Libertarian';

$questions[46] = 'What is the name of the Speaker of the House of Representatives now?';
$answers[46][$correct] = 'Paul Ryan';
$answers[46][$incorrect1] = 'Nancy Pelosi';
$answers[46][$incorrect2] = 'Donald Trump';
$answers[46][$incorrect3] = 'Barack Obama';

$questions[47] = 'There are four amendments to the Constitution about who can vote. Describe one of them.';
$answers[47][$correct] = 'Citizens eighteen (18) and older can vote.';
$answers[47][$incorrect1] = 'Only land owners can vote';
$answers[47][$incorrect2] = 'You must pay a tax to vote';
$answers[47][$incorrect3] = 'Resident aliens can vote';

$questions[48] = 'What is one responsibility that is only for United States citizens?';
$answers[48][$correct] = 'serve on a jury';
$answers[48][$incorrect1] = 'serving in the military';
$answers[48][$incorrect2] = 'protest';
$answers[48][$incorrect3] = 'stand your grount';

$questions[49] = 'Name one right only for United States citizens.';
$answers[49][$correct] = 'run for federal office';
$answers[49][$incorrect1] = 'getting an identification card';
$answers[49][$incorrect2] = 'protest the president';
$answers[49][$incorrect3] = 'right to own property';

$questions[50] = 'What are two rights of everyone living in the United States?';
$answers[50][$correct] = 'freedom of expression and freedom of speech';
$answers[50][$incorrect1] = 'freedom of marriage and freedom of privacy';
$answers[50][$incorrect2] = 'freedom of protest and freedom of veto';
$answers[50][$incorrect3] = 'freedom of purchase and freedom of union';

$questions[51] = 'What do we show loyalty to when we say the Pledge of Allegiance?';
$answers[51][$correct] = 'the United States';
$answers[51][$incorrect1] = 'the President';
$answers[51][$incorrect2] = 'the bald eagle';
$answers[51][$incorrect3] = 'capitalism';

$questions[52] = 'What is one promise you make when you become a United States citizen?';
$answers[52][$correct] = 'obey the laws of the United States';
$answers[52][$incorrect1] = 'protest';
$answers[52][$incorrect2] = 'serve in the military';
$answers[52][$incorrect3] = 'vote in every election';

$questions[53] = 'How old do citizens have to be to vote for President?';
$answers[53][$correct] = 'eighteen (18)';
$answers[53][$incorrect1] = 'twenty-one (21)';
$answers[53][$incorrect2] = 'sixteen (16)';
$answers[53][$incorrect3] = 'fifteen (15)';

$questions[54] = 'What are two ways that Americans can participate in their democracy?';
$answers[54][$correct] = 'vote and join a political party';
$answers[54][$incorrect1] = 'spend their money and pay taxes';
$answers[54][$incorrect2] = 'protest and overthrow the government';
$answers[54][$incorrect3] = 'run for office and buy local';

$questions[55] = 'When is the last day you can send in federal income tax forms?';
$answers[55][$correct] = 'April 15';
$answers[55][$incorrect1] = 'November 8';
$answers[55][$incorrect2] = 'May 4';
$answers[55][$incorrect3] = 'March 1';

$questions[56] = 'When must all men register for the Selective Service?';
$answers[56][$correct] = 'at age eighteen (18)';
$answers[56][$incorrect1] = 'at age twenty-one (21)';
$answers[56][$incorrect2] = 'at age forty-five (45)';
$answers[56][$incorrect3] = 'at age sixteen (16)';

$questions[57] = 'What is one reason colonists came to America?';
$answers[57][$correct] = 'freedom';
$answers[57][$incorrect1] = 'to escape the Ottoman Empire';
$answers[57][$incorrect2] = 'to spread Christianity';
$answers[57][$incorrect3] = 'the King was going to kill them';

$questions[58] = 'Who lived in America before the Europeans arrived?';
$answers[58][$correct] = 'Native Americans';
$answers[58][$incorrect1] = 'Celts';
$answers[58][$incorrect2] = 'Vikings';
$answers[58][$incorrect3] = 'Mongols';

$questions[59] = 'What group of people was taken to America and sold as slaves?';
$answers[59][$correct] = 'Africans';
$answers[59][$incorrect1] = 'Greeks';
$answers[59][$incorrect2] = 'Pacific Islanders';
$answers[59][$incorrect3] = 'Caribbean Islanders';

$questions[60] = 'Why did the colonists fight the British?';
$answers[60][$correct] = 'because of high taxes (taxation without representation)';
$answers[60][$incorrect1] = 'because the British were stealing their food supply';
$answers[60][$incorrect2] = 'because the British were going to kill them';
$answers[60][$incorrect3] = 'because the British were hoarding the horses';

$questions[61] = 'Who wrote the Declaration of Independence?';
$answers[61][$correct] = 'Thomas Jefferson';
$answers[61][$incorrect1] = 'John Adams';
$answers[61][$incorrect2] = 'Abraham Lincoln';
$answers[61][$incorrect3] = 'George Washington';

$questions[62] = 'When was the Declaration of Independence adopted?';
$answers[62][$correct] = 'July 4, 1776';
$answers[62][$incorrect1] = 'July 4, 1492';
$answers[62][$incorrect2] = 'July 4, 1812';
$answers[62][$incorrect3] = 'July 4, 1865';

$questions[63] = 'There were 13 original states. Name three.';
$answers[63][$correct] = 'Rhode Island, New York, Pennsylvania';
$answers[63][$incorrect1] = 'Oklahoma, New York, New Amsterdam';
$answers[63][$incorrect2] = 'Florida, Delaware, California';
$answers[63][$incorrect3] = 'Louisiana, Main, Maryland';

$questions[64] = 'What happened at the Constitutional Convention?';
$answers[64][$correct] = 'the Constitution was written';
$answers[64][$incorrect1] = 'the Declaration of Independence was written';
$answers[64][$incorrect2] = 'the Magna Carta was written';
$answers[64][$incorrect3] = 'the Paris Accords were written';

$questions[65] = 'When was the Constitution written?';
$answers[65][$correct] = '1787';
$answers[65][$incorrect1] = '1492';
$answers[65][$incorrect2] = '1812';
$answers[65][$incorrect3] = '1945';

$questions[66] = 'The Federalist Papers supported the passage of the U.S. Constitution. Name one of the writers.';
$answers[66][$correct] = 'Alexander Hamilton';
$answers[66][$incorrect1] = 'Franklin D. Roosevelt';
$answers[66][$incorrect2] = 'George Washington';
$answers[66][$incorrect3] = 'Abraham Lincoln';

$questions[67] = 'What is one thing Benjamin Franklin is famous for?';
$answers[67][$correct] = 'writer of "Poor Richard\'s Almanac"';
$answers[67][$incorrect1] = 'discovered electricity';
$answers[67][$incorrect2] = 'invented the telephone';
$answers[67][$incorrect3] = 'writer of "Common Sense"';

$questions[68] = 'Who is the “Father of Our Country”?';
$answers[68][$correct] = 'George Washington';
$answers[68][$incorrect1] = 'Abraham Lincoln';
$answers[68][$incorrect2] = 'Christopher Columbus';
$answers[68][$incorrect3] = 'Alexander Hamilton';

$questions[69] = 'Who was the first President?';
$answers[69][$correct] = 'George Washington';
$answers[69][$incorrect1] = 'Abraham Lincoln';
$answers[69][$incorrect2] = 'Benjamin Franklin';
$answers[69][$incorrect3] = 'Thomas Jefferson';

$questions[70] = 'What territory did the United States buy from France in 1803?';
$answers[70][$correct] = 'the Louisiana Territory';
$answers[70][$incorrect1] = 'the Northwest Territory';
$answers[70][$incorrect2] = 'Texas';
$answers[70][$incorrect3] = 'the Hawaiian Islands';

$questions[71] = 'Name one war fought by the United States in the 1800s.';
$answers[71][$correct] = 'War of 1812';
$answers[71][$incorrect1] = 'War of Independence';
$answers[71][$incorrect2] = 'the Spanish Inquisition';
$answers[71][$incorrect3] = 'the Secret War';

$questions[72] = 'Name the U.S. war between the North and the South.';
$answers[72][$correct] = 'the Civil War';
$answers[72][$incorrect1] = 'the War of 1812';
$answers[72][$incorrect2] = 'the Mexican-American War';
$answers[72][$incorrect3] = 'the French and Indian War';

$questions[73] = 'Name one problem that led to the Civil War.';
$answers[73][$correct] = 'slavery';
$answers[73][$incorrect1] = 'the California Gold Rush';
$answers[73][$incorrect2] = 'the sinking of the Lusitania';
$answers[73][$incorrect3] = 'the Louisiana Purchase';

$questions[74] = 'What was one important thing that Abraham Lincoln did?';
$answers[74][$correct] = 'freed the slaves';
$answers[74][$incorrect1] = 'fought for women\'s suffrage';
$answers[74][$incorrect2] = 'established the state of Illinois';
$answers[74][$incorrect3] = 'taxed the rich';

$questions[75] = 'What did the Emancipation Proclamation do?';
$answers[75][$correct] = 'freed the slaves';
$answers[75][$incorrect1] = 'declared independence from the British';
$answers[75][$incorrect2] = 'desegregated American school systems';
$answers[75][$incorrect3] = 'declared war on the Native Americans';

$questions[76] = 'What did Susan B. Anthony do?';
$answers[76][$correct] = 'fought for women\'s suffrage';
$answers[76][$incorrect1] = 'sewed the first American Flag';
$answers[76][$incorrect2] = 'helped with the Underground Railroad';
$answers[76][$incorrect3] = 'wrote The Star Spangled Banner';

$questions[77] = 'Name one war fought by the United States in the 1900s.';
$answers[77][$correct] = 'World War I';
$answers[77][$incorrect1] = 'the Holy War';
$answers[77][$incorrect2] = 'the Civil War';
$answers[77][$incorrect3] = 'the War of the World';

$questions[78] = 'Who was President during World War I?';
$answers[78][$correct] = 'Woodrow Wilson';
$answers[78][$incorrect1] = 'Richard Nixon';
$answers[78][$incorrect2] = 'Grover Cleveland';
$answers[78][$incorrect3] = 'James Garfield';

$questions[79] = 'Who was President during the Great Depression and World War II?';
$answers[79][$correct] = 'Franklin Roosevelt';
$answers[79][$incorrect1] = 'Woodrow Wilson';
$answers[79][$incorrect2] = 'Andrew Jackson';
$answers[79][$incorrect3] = 'Grover Cleveland';

$questions[80] = 'Who did the United States fight in World War II?';
$answers[80][$correct] = 'Japan, Germany, and Italy';
$answers[80][$incorrect1] = 'Germany, France, and Spain';
$answers[80][$incorrect2] = 'Italy, France, and China';
$answers[80][$incorrect3] = 'Russia, Japan, and Germany';

$questions[81] = 'Before he was President, Eisenhower was a general. What war was he in?';
$answers[81][$correct] = 'World War II';
$answers[81][$incorrect1] = 'Korean War';
$answers[81][$incorrect2] = 'Vietnam War';
$answers[81][$incorrect3] = 'World War I';

$questions[82] = 'During the Cold War, what was the main concern of the United States?';
$answers[82][$correct] = 'Communism';
$answers[82][$incorrect1] = 'Capitalism';
$answers[82][$incorrect2] = 'defending the poor';
$answers[82][$incorrect3] = 'defending Pearl Harbor';

$questions[83] = 'What movement tried to end racial discrimination?';
$answers[83][$correct] = 'civil rights movement';
$answers[83][$incorrect1] = 'the American Revolution';
$answers[83][$incorrect2] = 'the labor movement';
$answers[83][$incorrect3] = 'the abolition movement';

$questions[84] = 'What did Martin Luther King, Jr. do?';
$answers[84][$correct] = 'fought for civil rights';
$answers[84][$incorrect1] = 'was the first African-American President';
$answers[84][$incorrect2] = 'was a general in the Civil War';
$answers[84][$incorrect3] = 'freed the slaves';

$questions[85] = 'What major event happened on September 11, 2001, in the United States?';
$answers[85][$correct] = 'terrorists attacked the United States';
$answers[85][$incorrect1] = 'gay marriage was legalized';
$answers[85][$incorrect2] = 'hurricane Katrina';
$answers[85][$incorrect3] = 'the Great Recession';

$questions[86] = 'Name one American Indian tribe in the United States.';
$answers[86][$correct] = 'Navajo';
$answers[86][$incorrect1] = 'Celts';
$answers[86][$incorrect2] = 'Franks';
$answers[86][$incorrect3] = 'Hmong';

$questions[87] = 'Name one of the two longest rivers in the United States.';
$answers[87][$correct] = 'the Mississippi River';
$answers[87][$incorrect1] = 'the Chicago River';
$answers[87][$incorrect2] = 'the Nile River';
$answers[87][$incorrect3] = 'the Great Lakes Waterway';

$questions[88] = 'What ocean is on the West Coast of the United States?';
$answers[88][$correct] = 'the Pacific Ocean';
$answers[88][$incorrect1] = 'the Atlantic Ocean';
$answers[88][$incorrect2] = 'the Arctic Ocean';
$answers[88][$incorrect3] = 'the Indian Ocean';

$questions[89] = 'What ocean is on the East Coast of the United States?';
$answers[89][$correct] = 'the Atlantic Ocean';
$answers[89][$incorrect1] = 'the Pacific Ocean';
$answers[89][$incorrect2] = 'the Arctic Ocean';
$answers[89][$incorrect3] = 'the Indian Ocean';

$questions[90] = 'Name one U.S. territory.';
$answers[90][$correct] = 'Puerto Rico';
$answers[90][$incorrect1] = 'Cuba';
$answers[90][$incorrect2] = 'Belize';
$answers[90][$incorrect3] = 'Dominican Republic';

$questions[91] = 'Name one state that borders Canada.';
$answers[91][$correct] = 'North Dakota';
$answers[91][$incorrect1] = 'Illinois';
$answers[91][$incorrect2] = 'Wyoming';
$answers[91][$incorrect3] = 'Wisconsin';

$questions[92] = 'Name one state that borders Mexico.';
$answers[92][$correct] = 'Texas';
$answers[92][$incorrect1] = 'Louisiana';
$answers[92][$incorrect2] = 'Nevada';
$answers[92][$incorrect3] = 'Florida';

$questions[93] = 'What is the capital of the United States?';
$answers[93][$correct] = 'Washington, D.C.';
$answers[93][$incorrect1] = 'New York City';
$answers[93][$incorrect2] = 'Los Angeles';
$answers[93][$incorrect3] = 'Chicago';

$questions[94] = 'Where is the Statue of Liberty?';
$answers[94][$correct] = 'New York';
$answers[94][$incorrect1] = 'Washington, D.C.';
$answers[94][$incorrect2] = 'Philadelphia';
$answers[94][$incorrect3] = 'Boston';

$questions[95] = 'Why does the flag have 13 stripes?';
$answers[95][$correct] = 'because there were 13 original colonies';
$answers[95][$incorrect1] = 'because 13 is a lucky number';
$answers[95][$incorrect2] = 'because the Revolutionary War lasted 13 years';
$answers[95][$incorrect3] = 'because the President decided on the design';

$questions[96] = 'Why does the flag have 50 star?';
$answers[96][$correct] = 'because there are 50 states';
$answers[96][$incorrect1] = 'because there are 50 senators';
$answers[96][$incorrect2] = 'because it was voted on';
$answers[96][$incorrect3] = 'because 50 is a lucky number';

$questions[97] = 'What is the name of the national anthem?';
$answers[97][$correct] = 'The Star-Spangled Banner';
$answers[97][$incorrect1] = 'America the Beautiful';
$answers[97][$incorrect2] = 'God Bless the USA';
$answers[97][$incorrect3] = 'Born Free';

$questions[98] = 'When do we celebrate Independence Day?';
$answers[98][$correct] = 'July 4';
$answers[98][$incorrect1] = 'December 25';
$answers[98][$incorrect2] = 'October 31';
$answers[98][$incorrect3] = 'January 1';

$questions[99] = 'Name two national US holidays.';
$answers[99][$correct] = 'Independence Day and Labor Day';
$answers[99][$incorrect1] = 'Thanksgiving and Halloween';
$answers[99][$incorrect2] = 'Easter and Presidents\' Day';
$answers[99][$incorrect3] = 'Boxing Day and Memorial Day';
