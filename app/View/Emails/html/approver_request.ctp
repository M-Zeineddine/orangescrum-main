<body style="width:100%; margin:0; padding:0; -webkit-text-size-adjust:none; -ms-text-size-adjust:none; background-color:#ffffff;">
    <table cellpadding="0" cellspacing="0" border="0" id="backgroundTable" style="height:auto !important; margin:0; padding:0; width:100% !important; background-color:#F0F0F0;color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:14px; line-height:19px; margin-top:0; padding:0; font-weight:normal;">
        <tr>
            <td>
                <div id="tablewrap" style="width:100% !important; max-width:600px !important; text-align:center; margin:0 auto;">
                    <table id="contenttable" width="600" align="center" cellpadding="0" cellspacing="0" border="0" style="background-color:#FFFFFF; margin:0 auto; text-align:center; border:none; width: 100% !important; max-width:600px !important;border-top:8px solid #3DBB89">
                        <tr>
                            <td width="100%">
								<?php echo NEW_EMAIL_HEADER; ?>
                               <table  border="0" cellspacing="0" cellpadding="10" style="background:#FFF;width:100%;">
                                    <tr>
                                        <td width="100%">
                                            <table  border="0" cellspacing="0" cellpadding="0" style="background:#FFF;width:100%;">
                                                <tr>
                                                    <td align="left" colspan="4" style="padding-bottom:20px;">Hi <?php echo $approver_ses_name; ?>,</td>
                                                </tr>
												<tr>
													<td align="left" colspan="4" style="padding-bottom:20px;"><?php echo $submittedByName; ?> has requested your approval of the following timesheet.</td>
												</tr>
												<tr>
													<td colspan="4">
														<table style="width:100%;border-color: #CCC;border-collapse:collapse;" border="1" cellspacing="0" cellpadding="7">
															<tr>
																<td align="left" style="width:20%;font-weight:bold;">Week:</td>
																<td align="left" style="width:35%"><?php echo $submittedByWeek; ?></td>
																<td align="left" style="width:25%;font-weight:bold;">Required Hours:</td>
																<td align="left" style="width:20%"><?php echo $requestedWeeklyHours; ?></td>
															</tr>
															<tr>
																<td align="left" style="width:20%;font-weight:bold;">Submitted By:</td>
																<td align="left" style="width:35%"><?php echo $submittedByName; ?></td>
																<td align="left" style="width:25%;font-weight:bold;">Submitted Hours:</td>
																<td align="left" style="width:20%"><?php echo $submittedByHour; ?></td>
															</tr>
															<tr>
																<td align="left" style="width:20%;font-weight:bold;">Comment:</td>
																<td align="left" style="width:35%"><?php echo $timesheet_comment_val; ?></td>
																<td align="left" style="width:25%;font-weight:bold;"><?php echo $moreLessHoursText; ?>:</td>
																<td align="left" style="width:20%;color:<?php echo $moreLessColor; ?>"><?php echo $moreLessHours; ?></td>
															</tr>
														</table>
													</td>
												</tr>
                                            </table>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td style="background:#FFF;width:100%;text-align:left;">
                                            <p>Please <a href="<?php echo HTTP_ROOT; ?>timesheet-approvals">review</a> and approve this timesheet.</p>
                                        </td>
                                    </tr>
									<tr>
                                        <td style="background:#FFF;width:100%;text-align:left;">
                                            <p>Thanks & Regards<br/>
											The Orangescrum Team</p>
                                        </td>
                                    </tr>
                                </table>
								<table bgcolor="#F0F0F0" border="0" cellspacing="0" cellpadding="10" width="100%" style="border-top:2px solid #F0F0F0;margin-top:10px;border-bottom:3px solid #3DBB89">
									<tr>
										<td width="100%" bgcolor="#ffffff" style="text-align:center;">
											<p style="color:#222222; font-family:Arial, Helvetica, sans-serif; font-size:11px; line-height:14px; margin-top:0; padding:0; font-weight:normal;padding-top:5px;">
												<?php echo NEW_EMAIL_FOOTER; ?>	
											</p>
										</td>
									</tr>
								</table>
                            </td>
                        </tr>
                    </table>
                </div>
            </td>
        </tr>
    </table> 
   
</body>